@extends('layouts.back')

@section('content')
    <a href="{{route('carousel.')}}">Carousel</a>
    <a href="{{route('discover.edit', $discover->id)}}">Bio</a>
    <a href="{{route('video.edit', $video->id)}}">Video</a>
    <a href="">Titres</a>
@endsection