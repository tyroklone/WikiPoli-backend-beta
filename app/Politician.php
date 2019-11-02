<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Politician extends Model implements Searchable {

    protected $fillable = [
        'first_name', 'last_name', 'dob', 'occupation', 'biography', 'children', 'spouse', 'education_history', 'education', 'career', 'website', 'political_history', 'file'
    ];

    public function getSearchResult(): SearchResult {
      
        return new \Spatie\Searchable\SearchResult(
                $this, $this->id
        );
    }

}
