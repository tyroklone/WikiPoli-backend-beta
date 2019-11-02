<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliticianPost extends Model
{
    protected $fillable = [
        'post_id', 'politician_id'
    ];
}
