<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('custom-style')
    
</head>
<body>
    <div id="app">
        @desktop
            <h1 class="text-center">Please use a mobile device</h1>
        @elsedesktop
            @yield('header')

            <main class="py-4"> 
                @yield('content')
            </main>
            
            @include('partials.mobile.footer.footer')
        @enddesktop
        
    </div>
    
    @yield('script')
</body>
</html>