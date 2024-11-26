@if ($data->title)

    <div class="welcome2-section-area" style="background-image: url(assets/images/background/header2-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="welcome2-header heading3">
                        <span data-aos="fade-up" data-aos-duration="600">{{ $data->subtitle ?? '' }}</span>
                        <h1 data-aos="fade-up" data-aos-duration="800">{{ $data->title ?? '' }}</h1>
                        <p data-aos="fade-up" data-aos-duration="1000">{!! $data->description ?? '' !!}</p>
                        <div data-aos="fade-up" data-aos-duration="1200">
                          <a href="{{ $data->link->url ?? ''}}" target="{{ $data->link->target ?? ''}}" class="header-btn2">{{ $data->link->title ?? ''}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="header-images-area">
                        <div class="header-elements1 reveal">
                            <img src="{{ $data->image }}" alt="{{ $data->title ?? '' }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
