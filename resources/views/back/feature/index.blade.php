@extends('layouts.back')
@section('content')
    <div class="row bordou">
        <div class="col-6 d-flex flex-column text-center">
            <h2>Features Left</h2>
            @foreach ($featLeft as $feat)
            <div class="icon-box light left m-1 feat">
                <div class="service-text">
                    <h2>{{$feat->title}}</h2>
                    <p>{{$feat->description}}</p>
                </div>
                <div class="icon">
                    <i class="{{$feat->icon->icon}}"></i>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-6 d-flex flex-column text-center">
            <h2>Features Right</h2>
            @foreach ($featRight as $feat)
            <div class="icon-box light left m-1 feat">
                <div class="service-text">
                    <h2>{{$feat->title}}</h2>
                    <p>{{$feat->description}}</p>
                </div>
                <div class="icon">
                    <i class="{{$feat->icon->icon}}"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection