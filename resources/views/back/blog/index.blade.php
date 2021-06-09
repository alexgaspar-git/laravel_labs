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
                    <li class="list-group-item d-flex">
                        <div class="mx-2">
                            <a href="{{route('blogpost', $post->id)}}" class="btn btn-dark">Show</a>
                        </div>
                        <div class="mx-2">
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-dark">Edit</a>
                        </div>
                        <form action="{{route('post.destroy', $post->id)}}" method="POST" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tresh btn btn-dark"><i class="fas fa-trash"></i></button>
                        </form> 
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection