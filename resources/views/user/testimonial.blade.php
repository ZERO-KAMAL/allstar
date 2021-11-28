@push('css')

    <style>
        .slider__pagination .swiper-pagination-bullet-active {
            opacity: 1;
            background: #ffffff;
            width: 100px;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }

    </style>

@endpush
<div class="feedback-area">
    <div class="container-fluid">
        <!-- Swiper -->
        <div class=" testimonial">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                        <div class="row ">
                            <div class="col-lg-12 col-md-12 p-0">
                                <div class="feedback-item">

                                    <p> <span><i class="fas fa-quote-left"></i></span> There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour predefined words which
                                        don't look.</p>
                                    <div class="client-info">
                                        <div class="client-pic"><img
                                                src="https://bariton-react.envytheme.com/images/clients/client2.jpg"
                                                alt="image">
                                        </div>
                                        <h3>Sarah Taylor</h3><span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="swiper-slide">

                        <div class="row ">
                            <div class="col-lg-12 col-md-12 p-0">
                                <div class="feedback-item">

                                    <p> <span><i class="fas fa-quote-left"></i></span> There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour predefined words which
                                        don't look.</p>
                                    <div class="client-info">
                                        <div class="client-pic"><img
                                                src="https://bariton-react.envytheme.com/images/clients/client2.jpg"
                                                alt="image">
                                        </div>
                                        <h3>Sarah Taylor</h3><span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="swiper-slide">

                        <div class="row ">
                            <div class="col-lg-12 col-md-12 p-0">
                                <div class="feedback-item">

                                    <p> <span><i class="fas fa-quote-left"></i></span> There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour predefined words which
                                        don't look.</p>
                                    <div class="client-info">
                                        <div class="client-pic"><img
                                                src="https://bariton-react.envytheme.com/images/clients/client2.jpg"
                                                alt="image">
                                        </div>
                                        <h3>Sarah Taylor</h3><span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

@push('js')
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".testimonial", {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletActiveClass: 'active'
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
