<!DOCTYPE html>
<html lang="{!! get_language_attributes() !!}">

@include('layouts.header')

<body>

    @include('layouts.progress')
    @include('layouts.menu-web')
    @include('layouts.menu-mobile')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.js')

</body>

</html>
