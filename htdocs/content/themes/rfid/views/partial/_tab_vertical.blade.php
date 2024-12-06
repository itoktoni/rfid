@if ($data->title)
    <div class="service1-section-area sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="service1-header heading2 text-center">
                        <span data-aos="fade-up" data-aos-duration="800">{{ $data->subtitle ?? '' }}</span>
                        <h2 data-aos="fade-up" data-aos-duration="1000">{{ $data->title ?? '' }}</h2>
                    </div>
                </div>
                <div class="space60"></div>
            </div>

            <div class="service-vertical-tabs">
                <img src="assets/images/elements/tabs-elements1.png" alt="" class="tabs-elements keyframe4">
                <div class="grid">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="service-tabs-grid">
                                <div class="menu">

                                    @foreach ($data->slider as $slider)
                                        @if ($loop->first)
                                            <div class="active">
                                                <span class="light"></span>
                                                <div class="tabs-content-area" data-aos="fade-right"
                                                    data-aos-duration="800">
                                                    <div class="tabs-btn-icon">
                                                        <img src="assets/images/icons/tabs-btn1.svg" alt="">
                                                    </div>
                                                    <div class="tabs-btn-content">
                                                        <h4>{{ $slider->name ?? '' }}</h4>
                                                        <p>{{ $slider->description ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="space16"></div>
                                            <div>
                                                <span class="light"></span>
                                                <div class="tabs-content-area" data-aos="fade-right"
                                                    data-aos-duration="1000">
                                                    <div class="tabs-btn-icon">
                                                        <img src="assets/images/icons/tabs-btn2.svg" alt="">
                                                    </div>
                                                    <div class="tabs-btn-content">
                                                        <h4>{{ $slider->name ?? '' }}</h4>
                                                        <p>{{ $slider->description ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="service-tabs-grid" data-aos="zoom-out" data-aos-duration="1200">
                                <ul class="service-tabs-content">

                                    @foreach ($data->slider as $slider)
                                        @if ($loop->first)
                                            <li class="active">
                                                <div class="vertical-tabs-img reveal">
                                                    <img src="{{ $slider->image ?? '' }}"
                                                        alt="{{ $slider->description ?? '' }}">
                                                </div>
                                            </li>
                                        @endif

                                        <li>
                                            <div class="vertical-tabs-img reveal">
                                                <img src="{{ $slider->image ?? '' }}"
                                                    alt="{{ $slider->description ?? '' }}">
                                            </div>
                                        </li>

                                        @if ($loop->last)
                                            <li class="active">
                                                <div class="vertical-tabs-img reveal">
                                                    <img src="{{ $slider->image ?? '' }}"
                                                        alt="{{ $slider->description ?? '' }}">
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
