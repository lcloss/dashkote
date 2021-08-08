<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.head')
    @yield('styles')
    <title>{{ env('APP_NAME') }}</title>
</head>

@yield('content')
@include('partials.footer')
@yield('scripts')
</body>

</html>
