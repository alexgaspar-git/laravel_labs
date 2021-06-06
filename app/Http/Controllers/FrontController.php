<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\FormContact;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use App\Models\TagPost;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\Video;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
        $users = User::all();
        $title = Title::find(1);
        $subjects = FormContact::all();
        $ceo = User::where('job_id', 1)->get();
        $team = User::where('job_id', '>', 1)->get();
        $membre = $team->random(2);
        return view('home', compact('video', 'services', 'service9', 'testimonials', 'discovers', 'images', 'logo', 'contact','title', 'subjects','users', 'ceo', 'membre'));
    }
    public function services(){
        $pageServices = Service::paginate(9)->fragment('paginate');
        $featLeft = Feature::where('id','<', 4)->get();
        $featRight = Feature::where('id','>', 3)->get();  
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $title = Title::find(1);
        $posts = Post::inRandomOrder()->limit(3)->get();
        $subjects = FormContact::all();
        return view('front.services', compact('pageServices', 'featLeft', 'featRight','logo', 'contact', 'title', 'posts', 'subjects'));
    }
    public function blog(){
        $logo = Logo::find(1);
        $posts = Post::paginate(3)->fragment('paginate');
        $categories = Category::all();
        $tags = Tag::all();
        return view('front.blog', compact('logo', 'posts', 'categories','tags'));
    }
    public function contact(){
        $maps = Map::find(1);
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $subjects = FormContact::all();
        return view('front.contact', compact('maps','logo','contact','subjects'));
    }

    public function blogpost(Post $id){
        $post = $id;
        $logo = Logo::find(1);
        $pageBlogs = Post::paginate(3)->fragment('paginate');
        $categories = Category::all();
        $subjects = FormContact::all();
        $comments = Comment::where('post_id', $post->id)->where('validate', 1)->get();
        return view('front.blogpost', compact('logo','categories','subjects','comments','post','pageBlogs'));
    }
    
    public function search(Request $request){
        $search = $request->search;
        $logo = Logo::find(1);
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        $searchPosts = Post::where('title', 'LIKE', "%{$search}%")
                    ->orWhere('text', 'LIKE', "%{$search}%")->get();
        return view('front.search', compact('searchPosts','logo','posts','categories','tags'));
    }
}
