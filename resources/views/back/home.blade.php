@extends('layouts.back')

@section('content')



    {{-- <div class="container bordou">
        <h1 class="text-center">Bienvenue au dashboard</h1>
        <div class="row">
            <div class="col-6 d-flex">
                <img src="{{asset('img/avatar/'.Auth::user()->img)}}" alt="" class="profilimage">
                <div class="mx-5 desc">
                    <p><span>Prénom:</span> {{Auth::user()->firstname}}</p>
                    <p><span>Nom:</span> {{Auth::user()->name}}</p>
                    <p><span>Age:</span> {{Auth::user()->age}}</p>
                    <p><span>Email:</span> {{Auth::user()->email}}</p>
                    <p><span>Job:</span> {{Auth::user()->job->job}}</p>
                    <p><span>Role:</span> {{Auth::user()->role->role}}</p>
                </div>
            </div>
        </div>
    </div>
    --}}


    <div class="bordou">
        <h1 class="text-center mb-4">Bienvenue au dashboard</h1>
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <img src="{{asset('img/avatar/'.Auth::user()->img)}}" alt="" class="profilimage">
                <div class="mx-5 desc">
                    <p><span>Prénom:</span> {{Auth::user()->firstname}}</p>
                    <p><span>Nom:</span> {{Auth::user()->name}}</p>
                    <p><span>Age:</span> {{Auth::user()->age}}</p>
                    <p><span>Email:</span> {{Auth::user()->email}}</p>
                    <p><span>Job:</span> {{Auth::user()->job->job}}</p>
                    <p><span>Role:</span> {{Auth::user()->role->role}}</p>
                </div>
            </div>
            <div class="col-6">
                <a href="{{route('user.edit', Auth::user()->id)}}" class="btn btn-primary">Modifiez votre profil</a>
            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf 
                <button type="submit" class="btn btn-primary">Logout </button>
            </form>
        </div>
    </div>

@endsection