<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array'
    ];
    // this is funcion for link comments with posts
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
} 
