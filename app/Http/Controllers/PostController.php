<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Field;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Requests\LectureRequest;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\PostRequest;

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
        // dd($keyword);
        return view('posts.create_post', compact('lectures','keyword'));
    }
    
    
    
    // public function create_post()
    // {
    //     return view('posts.create_post');
    // }
    
    public function edit(Post $post)
    {
        return view('posts.edit');
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
        return view('posts.my_show');
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
    
    public function store_post(Post $post, PostRequest $request) 
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/create/post' . $post->id);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
}
