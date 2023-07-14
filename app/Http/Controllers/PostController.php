<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Field;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create(Field $field, Teacher $teacher, Department $department)
    {
        return view('posts.create')->with(['fields' => $field->get(),'teacheres' => $teacher->get(),'departments' => $department->get()]);
        
    }
    
    public function create_post()
    {
        return view('posts.create_post');
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit');
    }
    
    public function search(Post $post)
    {
        return view('posts.search');
    }
    
    public function lecture_search()
    {
        return view('posts.lecture_search');
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
        $post->fill($input)->save();
        return redirect('/posts/' . $lecture->id);
    }
    
    public function store_teacher(Teacher $post, TeacherRequest $request) 
    {
        $input = $request['teacher'];
        $post->fill($input)->save();
        return redirect('/posts/' . $teacher->id);
    }
    
    public function store_post(Post $post, PostRequest $request) 
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
}
