<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Post;

class Lecture extends Model
{
    use HasFactory;
    
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function posts()   
    {
        return $this->hasMany(Post::class); 
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    
}
