<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

 public function index () 
    {
    return view('index');
    }

 public function network () 
    {
    return view('network');
    }

    public function emby () 
    {
    return view('emby');
    }

 public function rutorrent () 
    {
    return view('rutorrent');
    }

}
