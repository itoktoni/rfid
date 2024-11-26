<div class="about-welcome-section-area about2" style="background-image: url({{ asset('assets/images/background/header2-bg.png') }}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-welcome-header text-center heading3">
                    <h1>{!! Loop::title() !!}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

{!! post_thumbnail() !!}

@if(!empty($template))
<div class="container-template">
    @foreach($template as $theme)
    <div class="template">
        @includeIf('partial._'.$theme->acf_fc_layout, ['data' => $theme])
    </div>
    @endforeach
</div>
@endif
