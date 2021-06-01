@extends('layouts.labs')

@section('content')
    @include('partials.services.preloader')
    @include('partials.services.header')
    @include('partials.services.pageheader')
    @include('partials.services.services')
    @include('partials.services.features')
    @include('partials.services.servicecard')
    @include('partials.services.newsletter')
    @include('partials.services.contact')
@endsection