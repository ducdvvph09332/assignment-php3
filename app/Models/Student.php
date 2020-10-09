<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = 'students';

    protected $fillable = [
        'name',
        'phone',
        'age',
        'gender',
        'address',
        'status',
    ];

    public function posts(){
        return $this->hasMany(Post::class, 'student_id','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'student_id', 'id');
    }
}
