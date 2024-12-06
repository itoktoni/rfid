@if ($data->title)
    <div class="service2-section-area sp3"
        style="background-image: url(assets/images/background/footer-bg2.png); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="service2-header heading4 text-center">
                        <span data-aos="fade-up" data-aos-duration="800">{{ $data->subtitle ?? '' }}</span>
                        <h2 data-aos="fade-up" data-aos-duration="1000">{{ $data->title ?? '' }}</h2>
                    </div>
                    <div class="space60"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service2-bg-area">
                        <div class="row">

                            @foreach ($data->box as $box)
                                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1200">
                                    <div style="min-height: 500px" class="service2-box-area text-center">
                                        <div class="service2-icon">
                                            <img src="{{ $box->icon ?? '' }}" alt="{{ $box->name ?? '' }}">
                                        </div>
                                        <div class="service2-content">
                                            <a href="features.html">{{ $box->name ?? '' }}</a>
                                            <p>{{ $box->description ?? '' }}</p>
                                            @if ($box->link)
                                                <a href="#" class="readmore">
                                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
