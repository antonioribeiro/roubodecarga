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
        jQuery(document).ready(function($) {
            jQuery('#slider-pro').sliderPro({
                width: 300,
                height: 300,
                visibleSize: '100%',
                forceSize: 'fullWidth',
                autoSlideSize: true
            });
        });
    </script>
@stop
