<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'best_comment_id',
        'slug'
    ];
    use HasFactory;
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
