@if ($data->title)

<div class="brand2-section-area sp8">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="brand2-header text-center">
                    <h4 data-aos="fade-up" data-aos-duration="1000">{{ $data->title ?? '' }}</h4>
                </div>
            </div>
        </div>
        <div class="space30"></div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1200">
                <div class="brand2-logos">
                    @foreach ($data->slider as $slider)
                    <div class="brand2-logo">
                        <img style="height: 100px" src="{{ $slider->image }}" alt="{{ $slider->name }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endif
