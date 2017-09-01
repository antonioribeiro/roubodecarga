<section class="slider row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div class="center slick">
            @foreach ($slides as $slide)
                <div>
                    <img src="/images/{{ $slide['filename'] }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
