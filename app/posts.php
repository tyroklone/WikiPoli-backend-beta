<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // comment package
    //use Commentable;
    
    protected $table = 'posts';

    public $primaryKey = 'id';

    protected $fillable = ['user', 'comment', 'post_id'];
    
    public function comments()
    {
        //return $this->hasMany('App\Comment', 'post_id', 'id');
        return $this->hasMany('App\Comment');
    }
}
