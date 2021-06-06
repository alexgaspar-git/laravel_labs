@extends('layouts.back')

@section('content')
    <div class="m-4 bordou">
        <h1 class="text-center mb-3">Galèrie d'images</h1>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-3 d-flex flex-column align-items-center">
                    <img src="/img/{{$image->link}}" height="200" class="galerie">
                    <span>{{$image->link}}</span>
                    <form action="{{route('image.destroy', $image->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tresh btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
        <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="link">Votre Image:</label>
                <input type="file" class="form-control-file" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        
    </div>
@endsection