<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade_Post;

class Grade extends Model
{
    use HasFactory;
    
    public function grade_post()   
    {
        return $this->hasMany(Grade_Post::class);  
    }
}