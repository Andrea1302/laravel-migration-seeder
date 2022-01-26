<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillablen=[
        'name_of_album',
        'date_of_publication',
        'genre'
    ];
}
