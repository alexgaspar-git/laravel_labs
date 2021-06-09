@extends('layouts.back')

@section('content')

    <form action="{{route('logout')}}" method="post">
        @csrf 
        <button type="submit" class="btn btn-primary">Logout </button>
    </form>
   

@endsection