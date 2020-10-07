<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'desc',
        'content',
        'image_url',
        'status',
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
