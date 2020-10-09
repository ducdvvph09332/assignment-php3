<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'student_id',
        'desc',
        'content',
        'image_url',
        'status',
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }

}
