@if ($data->title)
    <div class="templete1-section-area sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="templete-header text-center heading4">
                        <span data-aos="fade-up" data-aos-duration="800">{{ $data->subtitle ?? '' }}</span>
                        <h2 data-aos="fade-up" data-aos-duration="1000">{{ $data->title ?? '' }}</h2>
                    </div>
                </div>
                <div class="space30"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-carousel-area" data-aos="fade-right" data-aos-duration="1000">
                        <div class="align-items-start">
                            <div class="nav nav-pills" id="v-pills-tab" aria-orientation="vertical" role="tablist">
                                <button class="nav-link active" id="v-pills-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-all" type="button" role="tab"
                                    aria-controls="v-pills-all" aria-selected="true">
                                    All
                                </button>

                                @foreach ($tags as $tag)
                                    <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-{{ $tag->slug }}" type="button" role="tab"
                                        aria-selected="false">
                                        {{ $tag->name }}
                                    </button>
                                @endforeach

                            </div>
                            <div class="space60"></div>
                            <div class="tab-content" id="v-pills-tabContent" data-aos="fade-left"
                                data-aos-duration="1200">
                                <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel"
                                    aria-labelledby="v-pills-all-tab">
                                    <div class="tab-carousel-section owl-carousel">
                                        @foreach ($data->slider as $slider)
                                            <div class="tabs-carousel-img">
                                                <img src="{{ $slider->image }}" alt="{{ $slider->name }}">
                                                <div class="tabs-morebtn">
                                                    <a href="#" class="header-btn2">{{ $slider->name }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                @foreach ($tags as $tag)
                                <div class="tab-pane fade" id="v-pills-{{ $tag->slug }}" role="tabpanel">
                                    <div class="tab-carousel-section owl-carousel">

                                        @foreach ($data->slider as $slider)
                                            @if (in_array($tag->term_id, $slider->tag))
                                                <div class="tabs-carousel-img">
                                                    <img src="{{ $slider->image }}" alt="{{ $slider->name }}">
                                                    <div class="tabs-morebtn">
                                                        <a href="#" class="header-btn2">{{ $slider->name }}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
