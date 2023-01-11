<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Control Panel'))</title>
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"/>
</head>
<body>

    @yield('style')

    @if(Auth::check())

        @include('admin.components.header')
        @include('admin.components.sidebar')
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @yield('content')

    @yield('script')

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    @if(session()->has('success'))
        <script>
            alertify.success('{{session('success')}}')
        </script>
    @endif
    @if(session()->has('error'))
        <script>
            alertify.error('{{session('error')}}')
        </script>
    @endif

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                alertify.error('{{$error}}');
            </script>
        @endforeach
    @endif
</body>
</html>
