@extends('layouts.back')
@section('content')
    <div class="bordou d-flex flex-column">
        <div class="d-flex">
            @forelse ($posts as $post)    
                <div class="grid shadow mx-1">
                    <li class="list-group-item shadow"><span>ID: </span>{{$post->id}}</li>
                    <li class="list-group-item shadow"><span>Title: </span>{{$post->title}}</li>
                    <li class="list-group-item shadow"><span>Text: </span>{{Str::limit($post->text, 50, '...')}}</li>
                    <li class="list-group-item shadow"><span>Date: </span>{{$post->dateDay}} {{$post->dateMonth}} {{$post->dateYear}}</li>
                    <li class="list-group-item shadow"><span>Image: </span>{{$post->img}}</li>
                    <li class="list-group-item shadow"><span>Category: </span>{{$post->category->category}}</li>
                    <li class="list-group-item shadow"><span>Validate: </span>{{$post->validate}}</li>
                    <li class="list-group-item shadow d-flex">
                        <form action="{{route('valid', $post->id)}}" method="POST" class="mx-2">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="tresh btn btn-dark">Validate</button>
                        </form> 
                    </li>
                </div>
            @empty
                <h1>Il n'y a pas d'article ici.</h1>
            @endforelse
        </div>   
    </div>
@endsection