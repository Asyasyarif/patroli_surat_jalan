<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body id="page-top">
    <div id="wrapper">
        @auth
            @include('partials.sidebar')
        @endauth
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @auth
                    @include('partials.topbar')
                @endauth

                <main class="container-fluid">
                    @yield('content')
                </main>
            </div>
            @include('partials.footer')
        </div>
    </div>

    @include('partials.footer-script')
</body>
</html>
