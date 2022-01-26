<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillablen=[
        'title',
        'date_of_publication',
        'produced_by',
        'views_on_spotify',
        'single'
    ];
   
}
