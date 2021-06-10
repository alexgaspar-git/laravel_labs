<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user){
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $jobs = Job::all();
        return view('back.user.edit', compact('user','video','discover','title','contact','map','logo','footer','jobs'));
    }

    public function update(Request $request, User $user){
        request()->validate([
            "firstname"=>['required','string','max:30'],
            "name"=>['required','string','max:30'],
            "email"=>['required','string','max:30'],
            "age"=>['required','integer'],
            // "img"=>['required','string','max:30'],
            // "role"=>['required','string','max:30'],
            "job"=>['required','string','max:30'],
            // "testimonial"=>['string','max:255'],
        ]);


        $request->file('img')->storePublicly('img/avatar/','public');
        $user->img = $request->file('img')->hashName();
        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->role->role = $request->role;
        $user->job->job = $request->job;
        $user->save();
        return redirect()->route('dashboard')->with('success','Your changes have been saved.');
    }
}
