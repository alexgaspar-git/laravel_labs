<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Feature;
use App\Models\Icon;
use App\Models\Title;
use App\Models\Video;
use Illuminate\Http\Request;

class FeatureController extends Controller
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
        $featLeft = Feature::where('id','<', 4)->get();
        $featRight = Feature::where('id','>', 3)->get();  
        return view('back.feature.index', compact('featLeft','featRight','video','discover','title'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $video = Video::find(1);
        $discover = Discover::find(1);
        $title = Title::find(1);
        $icons = Icon::all();
        return view('back.feature.edit', compact('feature','video','discover','title','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->icon_id = $request->icon;
        $feature->save();
        return redirect('/admin/feature/')->with('success', 'Your changes have been saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
