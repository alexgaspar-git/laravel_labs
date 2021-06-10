<?php

namespace App\Http\Controllers;

use App\Mail\ValidateUser;
use App\Mail\VerifyUserSender;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Role;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index(){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $posts = Post::where('validate', 0)->where('bin', 0)->get();
        $users = User::where('validate', 0)->get();
        $jobs = Job::all();
        $roles = Role::all();
        return view('back.verify.index', compact('video','discover','title','contact','map','logo','footer','posts','users','jobs','roles'));
    }

    public function valid(Post $id){
        $post = $id;
        $post->validate = 1;
        $post->save();

        return redirect()->back()->with('success','Post validé');
    }
}
