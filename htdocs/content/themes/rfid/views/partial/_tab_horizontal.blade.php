@if ($data->title)

    <div class="genaration2-section-area sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="genaration2-header text-center heading4">
                        <span data-aos="fade-up" data-aos-duration="800">{{ $data->subtitle ?? '' }}</span>
                        <h2 data-aos="fade-up" data-aos-duration="1000">{{ $data->title ?? '' }}</h2>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="col-lg-12 m-auto">
                <div class="tabs-area" data-aos="fade-up" data-aos-duration="1000">
                    <ul class="nav nav-pills justify-center" id="pills-tab">

                        @foreach ($data->slider as $slider)
                            <li class="nav-item {{ $loop->first ? 'active' : '' }}" role="presentation">
                                <button class="nav-link" id="pills-email-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $loop->iteration }}" type="button" role="tab"
                                    aria-controls="pills-{{ $loop->iteration }}"
                                    aria-selected="true">{{ $slider->name }}</button>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="space60"></div>
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent">

                        @foreach ($data->slider as $slider)
                            <div class="tab-pane {{ $loop->first ? 'show active' : '' }} fade"
                                id="pills-{{ $loop->iteration }}" role="tabpanel">
                                <div class="tabs-contents">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="tabs-images reveal">
                                                <img src="{{ $slider->image }}" alt="{{ $slider->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            @foreach ($slider->sub as $sub)
                                                <div class="tabs-text-area">
                                                    <div class="tabs-icon">
                                                        <img src="assets/images/icons/service-icon1.svg" alt="">
                                                    </div>
                                                    <div class="tabs-text">
                                                        <a href="features.html">{{ $sub->title }}</a>
                                                        <p>{!! $sub->description !!}</p>
                                                    </div>
                                                </div>
                                                <div class="space20"> </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
