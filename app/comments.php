<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     *
     * This tells the comment that it belongs to a single post, this takes care of the relationship between the comments table and the posts table
     *
     */
    public function post()
    {
       return $this->belongsTo('App\Posts', 'foreign_key');
    }
}
