<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
