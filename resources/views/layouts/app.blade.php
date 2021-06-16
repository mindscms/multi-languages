<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ config('locales.languages')[app()->getLocale()]['rtl_support'] }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (config('locales.languages')[app()->getLocale()]['rtl_support'] == 'rtl')
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-rtl.css') }}">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" id="languagesDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ config('locales.languages')[app()->getLocale()]['name'] }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="languagesDropdown">
                            @foreach(config('locales.languages') as $key => $val)
                                @if ($key != app()->getLocale())
                                    <a href="{{ route('change.language', $key) }}" class="dropdown-item">{{ $val['name'] }}</a>
                                @endif
                            @endforeach
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="alert alert-{{ session('alert-type') }}" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @yield('content')
    </main>
</div>
</body>
</html>
