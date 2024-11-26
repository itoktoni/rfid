@if ($data->content_description)
    <div class="blog-right-details-area sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-right-area heading6 p-0">
                        <h2> {!! $data->content_title ?? '' !!} </h2>
                        <div class="space32"></div>
                        <div class="blog-list-area">
                            <div class="content">
                                <p>
                                    {!! $data->content_description ?? '' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
