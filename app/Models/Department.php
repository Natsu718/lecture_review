<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;
use App\Models\User;

class Department extends Model
{
    use HasFactory;
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function lectures()   
    {
        return $this->hasMany(Lecture::class);
    }
}
