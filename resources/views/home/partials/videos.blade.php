<section class="videos">
    <div class="container">
        <div class="row">
            <div class="main_videos">
                <div class="head_title text-center">
                    <h2>Vídeos</h2>
                    <p class="lead">Confira as dicas e depoimentos de quem mais entende do assunto.</p>
                </div>

                <div class="videos_content">
                    @foreach($videos as $video)
                        <div class="col-md-6 col-sm-6 video">
                          <div class='embed-container'><iframe src='https://www.youtube.com/embed/{{ $video['code'] }}' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
