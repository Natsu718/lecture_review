<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\DepartmentController;
// use App\Http\Controllers\GradeController;
// use App\Http\Controllers\TeacherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'top')->name('dashboard');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/lectures', 'create_post')->name('create_post');
    Route::get('/posts/{lecture}', 'create_post2')->name('create_post2');
    Route::get('/user/posts', 'my_show')->name('my_show');
    Route::get('/search/lecture', 'show')->name('show');
    Route::get('/search/{lecture}', 'show2')->name('show2');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    Route::post('/lectures/store', 'store_lecture')->name('store_lecture');
    Route::post('/teachers/store', 'store_teacher')->name('store_teacher');
    Route::post('/posts/{lecture}', 'store_post')->name('store_post');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    
    Route::get('/lectures/delete', 'lectures_delete')->name('lectures_delete');
    Route::delete('/{lecture}', 'lecture_delete')->name('lecture_delete');
    Route::delete('/{teacher}', 'teacher_delete')->name('teacher_delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
