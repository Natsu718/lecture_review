<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade_Post;
use App\Models\User;
use App\Models\Lecture;
use App\Models\Department;

class Post extends Model
{
    use HasFactory;
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
    
    public function grades()   
    {
        return $this->belongsToMany(Grade::class);  
    }
    
    protected $fillable = [
        'user_id',
        'lecture_id',
        'comment',
        'grade_id',
        'review',
    ];
}
