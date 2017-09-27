<section class="slider">
    <div class="row background">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                    <div class="logo-disquedenuncia text-right">
                        <img src="/images/disque.png">
                    </div>
                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="center slick">
                        @foreach ($slides as $slide)
                            <div>
                                <img src="/images/{{ $slide['filename'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
