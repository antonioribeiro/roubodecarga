@extends('layouts.app')

@section('content')
    <div class="container-full">
        <div class="row">
            <div class="col-xs-12">
                @include('home.partials.header')

                @include('home.partials.slider')

                @include('home.partials.videos')

                @include('home.partials.slogan')

                @include('home.partials.footer')
            </div>
        </div>
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
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        variableWidth: false,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        variableWidth: false,
                    }
                },
            ],
        });
    </script>
@stop
