@extends('layouts.app')

@section('content')
    <div class="container-full">
        @include('home.partials.header')

        @include('home.partials.slider')

        @include('home.partials.videos')

        @include('home.partials.slogan')

        @include('home.partials.footer')
    </div>
@stop
