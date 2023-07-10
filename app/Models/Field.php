<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class Field extends Model
{
    use HasFactory;
    
    public function lectures()   
    {
        return $this->hasMany(Lecture::class); 
    }
}
