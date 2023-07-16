<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class Teacher extends Model
{
    use HasFactory;
    
    public function lectures()   
    {
        return $this->hasMany(Lecture::class); 
    }
    
    protected $fillable = [
        'name'
    ];
}
