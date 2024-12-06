@extends('layouts.main')

@section('content')

@if(!empty($template))
<div class="container-template">
    @foreach($template as $theme)
    <div class="template">
        @includeIf('partial._'.$theme->acf_fc_layout, ['data' => $theme])
    </div>
    @endforeach
</div>
@endif

@endsection