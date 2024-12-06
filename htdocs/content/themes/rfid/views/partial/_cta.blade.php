@if ($data->title)
    <div class="cta3-section-area "
        style="background-image: url(assets/images/background/cta-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="cta3-header-area text-center heading6">
                        <h2 data-aos="zoom-out" data-aos-duration="1000" class="text-capitalize">{{ $data->title }}</h2>
                        <div class="space20"></div>
                        <span class="text-white">{{ $data->description }}</span>
                        <div class="space32"></div>
                        <div data-aos="zoom-out" data-aos-duration="1200">
                            <a href="{{ $data->link->url ?? ''}}" target="{{ $data->link->target ?? ''}}" class="header-btn5">{{ $data->link->title ?? ''}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
