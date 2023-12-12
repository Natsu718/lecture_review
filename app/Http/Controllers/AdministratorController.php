<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Lecture;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function user_name(User $user)
    {
        return view('administrator.user_name')->with(['users'=>$user->get()]);
    }
    
    public function lectures_delete(Lecture $lecture, Teacher $teacher)
    {
        $user_number=User::orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->first();
        return view('administrator.lecture_delete', compact('user_number'))->with(['lectures'=>$lecture->get(), 'teachers'=>$teacher->get()]);
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
