<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'original_title',
        'nationality',
        'date',
        'vote',
    ];
}
