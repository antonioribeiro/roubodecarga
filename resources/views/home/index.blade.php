@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            @include('home.partials.header')

            @include('home.partials.slider')

            @include('home.partials.videos')

            @include('home.partials.slogan')

            @include('home.partials.footer')
        </div>
    </div>
@stop
