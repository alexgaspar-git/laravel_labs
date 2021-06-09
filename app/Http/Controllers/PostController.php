<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $posts = Post::all();
        return view('back.blog.index', compact('video','discover','title','contact','map','logo','footer','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $contact = Contact::find(1);
        $map = Map::find(1);
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $categories = Category::all();
        return view('back.blog.create',compact('video','discover','title','contact','map','logo','footer','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "text"=> ["required","max:500"],
            "title"=> ["required","max:50"],
            "img"=> ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        $post = new Post();
        $request->file('img')->storePublicly('img/','public');
        $post->text = $request->text;
        $post->title = $request->title;
        $post->img = $request->file('img')->hashName();
        $post->dateDay = date('d');
        $post->dateMonth = date('M');
        $post->dateYear = date('Y');
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->validate = 0;
        $post->save();
        return redirect()->route('post.index')->with('success','Your changes have been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $article = $post;
        $logo = Logo::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::find(1);
        return view('front.blogpost', compact('article', 'categories', 'tags', 'footer', 'logo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete('img/'.$post->img);
        $post->delete();
        return redirect()->back();
    }
}
