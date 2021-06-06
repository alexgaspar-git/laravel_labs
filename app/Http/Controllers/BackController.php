<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Video;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $discover = Discover::find(1);
        return view('back.admin', compact('video', 'discover'));
    }
}

