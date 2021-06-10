@extends('layouts.back')

@section('content')
    @include('layouts.flash')
    <div class="m-4 bordou shadow">
        <h1 class="text-center mb-3">Galèrie d'images</h1>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-3 d-flex flex-column align-items-center">
                    <img src="/img/{{$image->link}}" height="200" class="galerie shadow">
                    <span>{{$image->link}}</span>
                    <div class="d-flex">
                        <form action="{{route('image.destroy', $image->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tresh btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        @if ($image->first == 1)
                            <p>Première image</p>
                        @else                    
                            <form action="{{route('firstImage', $image->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="tresh btn btn-primary">First</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="link">Votre Image:</label>
                <input type="file" class="form-control-file @error('link') is-invalid @enderror" name="link">
                @error('link')
                <span class="invalid-feedback">
                    <strong>Field required</strong>
                </span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        
    </div>
@endsection