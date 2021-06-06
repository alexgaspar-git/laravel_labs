<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('back.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "link"=>['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);
        $request->file('link')->storePublicly('img/','public');
        $image = new Image();
        $image->link = $request->file('link')->hashName();
        $image->save();
        return redirect()->route('image.index')->with('success','Your changes have been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        // request()->validate([
        //     "link"=>['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        // ]);

        // if ($request->file('link') != null) {
        //     Storage::disk('public')->delete('img/'.$image->src);
        //     $request->file('link')->storePublicly('img/','public');
        //     $image->src = $request->file('link')->hashName();
        //     $image->save();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::disk('public')->delete('img/'.$image->src);
        $image->delete();
        return redirect()->back();
    }
}
