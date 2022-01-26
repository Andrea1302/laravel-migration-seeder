<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
class homeController extends Controller
{
    public function home(){

        $songs = Song::all();

        return view('home',compact('songs'));
    }
}
