
<section class="webinar-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
            <div class="webinar-content">
                <h2>Check Out Our Latest Webinar</h2>
                <p>There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some form, by injected humour, or randomised
                    words which don't look even slightly believable. If you are going to use a passage.</p><a
                    class="btn btn-primary" href="/#">Watch More</a>
            </div>
        </div>
        <div class="col-lg-6 p-0 col-md-6 col-sm-12" _msthidden="1">
            <div class="webinar-video-image"><img data-cfsrc="/images/woman.jpg" alt="image"
                    src="https://bariton-react.envytheme.com/images/woman.jpg"><a class="video-btn popup-youtube"><i
                        class="fas fa-play"></i></a></div>
        </div>
    </div>
</section>

@push('js')

    <script>
        $('.popup-youtube').magnificPopup({
            items: {
                src: 'https://www.youtube.com/watch?v=7eo8XpT4CmM'
            },
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    }
                },
                srcAction: 'iframe_src',
            }
        });
    </script>

@endpush
