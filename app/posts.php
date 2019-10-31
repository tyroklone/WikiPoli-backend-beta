<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Posts extends Model
{
    use Commentable;
    
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }
}
