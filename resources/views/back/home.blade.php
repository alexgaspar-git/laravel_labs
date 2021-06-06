@extends('layouts.back')

@section('content')
    <div class="container bordou">
        <a href="{{route('image.index')}}">Carousel</a>
        <a href="{{route('discover.edit', $discover->id)}}">Bio</a>
        <a href="{{route('video.edit', $video->id)}}">Video</a>
        <a href="{{route('title.edit', $title->id)}}">Titres</a>
    </div>
@endsection