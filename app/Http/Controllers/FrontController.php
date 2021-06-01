<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $services = Service::inRandomOrder()->limit(3)->get();
        $service9 = Service::inRandomOrder()->limit(9)->get();
        $testimonials = Testimonial::inRandomOrder()->limit(6)->get();
        return view('home', compact('video', 'services', 'service9', 'testimonials'));
    }
    public function services(){
        $pageServices = Service::paginate(9)->fragment('paginate');
        return view('front.services', compact('pageServices'));
    }
    public function blog(){
        return view('front.blog');
    }
    public function contact(){
        return view('front.contact');
    }
}
