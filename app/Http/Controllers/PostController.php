<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Field;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Grade;
use App\Models\Grade_Post;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Requests\Grade_PostRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LectureRequest;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\PostRequest;
use App\Http\Requests\GradeRequest;
use Auth;

class PostController extends Controller
{
    
    public function create(Field $field, Teacher $teacher, Department $department)
    {
        return view('posts.create')->with(['fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get()]);
        
    }
    
    
    public function create_post(Lecture $lecture, Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Lecture::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }

        $lectures = $query->get();
        return view('posts.create_post', compact('lectures','keyword'));
    }
    
    public function create_post2(User $user, Lecture $lecture, Field $field, Teacher $teacher, Department $department, Grade $grade)
    {
        return view('posts.create_post2')->with(['user'=>$user->get(),'lecture'=>$lecture,'fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get(),'grades'=>$grade->get()]);
        
    }
    
    
    // public function create_post()
    // {
    //     return view('posts.create_post');
    // }
    
    public function edit(Post $post,User $user, Lecture $lecture, Field $field, Teacher $teacher, Department $department, Grade $grade)
    {
        return view('posts.edit')->with(['post'=>$post, 'users'=>Auth::id(),'lectures'=>$lecture,'fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get(),'grades'=>$grade->get()]);
    }
    
    public function search(Post $post)
    {
        return view('posts.search');
    }

    

    public function show(Post $post)
    {
        return view('posts.show');
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
        return redirect('/posts/lectures');
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/user/posts');
    }
}
