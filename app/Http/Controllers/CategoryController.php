<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Tag;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $tags = Tag::all();
        $categories = Category::all();
        return view('back.category.index', compact('categories','video', 'discover', 'title', 'contact','map', 'footer','logo'));
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
        $tags = Tag::all();
        $categories = Category::all();
        return view('back.category.create', compact('categories','video', 'discover', 'title', 'contact','map', 'footer','logo'));
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
            "category"=>["required","max:30"]
        ]);
        
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return redirect('/admin/category')->with('success', 'Your tag has been added.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
