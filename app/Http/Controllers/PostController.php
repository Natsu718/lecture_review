<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Field;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LectureRequest;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\PostRequest;
use App\Http\Requests\GradeRequest;
use App\Http\Requests\DepartmentRequest;
use Auth;

class PostController extends Controller
{
    public function top()
    {
        return view('dashboard');
    }
    
    public function create(Field $field, Teacher $teacher, Department $department)
    {
        return view('posts.create')->with(['fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get()]);
        
    }
    
    
    public function create_post(Lecture $lecture, Request $request,Department $department)
    {
        $keyword = $request->input('keyword');
        $department_id = $request->input('department_id');
        $query = Lecture::query();
        if(!empty($keyword)&& $department_id != null) {
            $query->where('name', 'LIKE', "%{$keyword}%", 'AND','department_id','=', $department_id);
        } elseif(!empty($keyword) && $department_id == null) {
            $query->where('name', 'LIKE', "%{$keyword}%");   
        } elseif (empty($keyword) && $department_id != null){
            $query->where('department_id','=', $department_id);
        } 
        $lectures = $query->get();
        return view('posts.create_post', compact('lectures','keyword','department_id'))->with(['departments' => $department->get()]);
    }


    public function show(Lecture $lecture, Request $request,Department $department)
    {
        $keyword = $request->input('keyword');
        $department_id = $request->input('department_id');
        $query = Lecture::query();
        if(!empty($keyword)&& $department_id != null) {
            $query->where('name', 'LIKE', "%{$keyword}%", 'AND','department_id','=', $department_id);
        } elseif(!empty($keyword) && $department_id == null) {
            $query->where('name', 'LIKE', "%{$keyword}%");   
        } elseif (empty($keyword) && $department_id != null){
            $query->where('department_id','=', $department_id);
        }
        $lectures = $query->get();
        return view('posts.show', compact('lectures','keyword','department_id'))->with(['departments' => $department->get()]);
    }
    
    public function show2(Post $post, Lecture $lecture, Request $request, Department $department)
    {
        return view('posts.show2')->with(['posts'=>$post->get(),'lecture'=>$lecture]);
    }
    
    
    public function create_post2(User $user, Lecture $lecture, Field $field, Teacher $teacher, Department $department, Grade $grade)
    {
        return view('posts.create_post2')->with(['user'=>$user->get(),'lecture'=>$lecture,'fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get(),'grades'=>$grade->get()]);
    }

    
    public function edit(Post $post,User $user, Lecture $lecture, Field $field, Teacher $teacher, Department $department, Grade $grade)
    {
        return view('posts.edit')->with(['post'=>$post, 'users'=>Auth::id(),'lectures'=>$lecture,'fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get(),'grades'=>$grade->get()]);
    }


    public function my_show(Post $post)
    { 
        return view('posts.my_show')->with(['posts'=>$post->get(),'user'=>Auth::id()]); 
    }

    public function store_lecture(Lecture $lecture, LectureRequest $request) 
    {
        $input = $request['lecture'];
        $lecture->fill($input)->save();
        return redirect('/posts/create');
    }
    
    public function store_teacher(Teacher $teacher, TeacherRequest $request) 
    {
        $input = $request['teacher'];
        $teacher->fill($input)->save();
        return redirect('/posts/create');
    }
    
    public function store_post(Post $post, PostRequest $request, Lecture $lecture) 
    {
        $input = $request['post'];
        $input['user_id']=Auth::id();
        $input['lecture_id']=$lecture->id;
        
        $post->fill($input)->save();
        $post->grades()->attach($request->grade_id);
        
        $lecture->review = round($post->where('lecture_id',$lecture->id)->avg('review'),1);
        $lecture->save();
        return redirect('/posts/lectures');
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/user/posts');
    }
    
    public function delete(Post $post, Grade $grade)
    {
        $post->grades()->detach();
        $post->delete();
        $lecture=Lecture::where('id', $post->lecture_id)->first();
        $lecture->review = round($post->where('lecture_id',$lecture->id)->avg('review'),1);
        $lecture->save();
        return redirect('/user/posts');
    }
    
    public function lectures_delete(Lecture $lecture, Teacher $teacher)
    {
        $user_number=User::orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->first();
        return view('posts.lecture_delete', compact('user_number'))->with(['lectures'=>$lecture->get(), 'teachers'=>$teacher->get()]);
    }
    
    public function lecture_delete(Lecture $lecture)
    {
        $lecture->delete();
        return redirect('/lectures/delete');
    }
    
    public function teacher_delete(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/lectures/delete');
    }
}
