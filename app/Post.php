<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'author_id'];

    public $timestamps = true;

    public function author()
    {
        // 以下User类不能直接调用'User'，需要指明'App\User'
        return $this->belongsTo('App\User', 'author_id');
    }
}