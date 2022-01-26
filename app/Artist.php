<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillablen=[
        'name',
        'surname',
        'artist_name',
        'email',
        'bio'
    ];
}
