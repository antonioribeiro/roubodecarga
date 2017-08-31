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

@section('page-javascript')
    <script type="text/javascript">
        jQuery(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: true,
            //autoplay: true,
            //autoplaySpeed: 2000,
        });
    </script>
@stop
