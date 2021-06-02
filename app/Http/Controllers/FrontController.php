<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $services = Service::inRandomOrder()->limit(3)->get();
        $service9 = Service::inRandomOrder()->limit(9)->get();
        $testimonials = Testimonial::inRandomOrder()->limit(6)->get();
        $discovers = Discover::all();
        $images = Image::all();
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $title = Title::find(1);
        return view('home', compact('video', 'services', 'service9', 'testimonials', 'discovers', 'images', 'logo', 'contact','title'));
    }
    public function services(){
        $pageServices = Service::paginate(9)->fragment('paginate');
        $featLeft = Feature::where('id','<', 4)->get();
        $featRight = Feature::where('id','>', 3)->get();  
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $title = Title::find(1);
        return view('front.services', compact('pageServices', 'featLeft', 'featRight','logo', 'contact','title'));
    }
    public function blog(){
        $logo = Logo::find(1);
        return view('front.blog', compact('logo'));
    }
    public function contact(){
        $maps = Map::find(1);
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        return view('front.contact', compact('maps','logo','contact'));
    }
}
