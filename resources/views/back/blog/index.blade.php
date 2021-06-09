@extends('layouts.back')
@section('content')
    <div class="bordou d-flex flex-column">
        <div>
            <a href="{{route('post.create')}}" class="btn btn-primary">Add</a>
        </div>
        <br>
        <div class="container">
            @foreach ($posts as $post)    
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">{{$post->id}}</li>
                    <li class="list-group-item">{{$post->title}}</li>
                    <li class="list-group-item">{{$post->text}}</li>
                    <li class="list-group-item">{{$post->dateDay}}</li>
                    <li class="list-group-item">{{$post->dateMonth}}</li>
                    <li class="list-group-item">{{$post->dateYear}}</li>
                    <li class="list-group-item">{{$post->img}}</li>
                    <li class="list-group-item">{{$post->category->category}}</li>
                    <li class="list-group-item">{{$post->validate}}</li>
                    <li class="list-group-item">
                        <a href="{{route('blogpost', $post->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-primary"><i class="fas fa-trash"></i></a>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection