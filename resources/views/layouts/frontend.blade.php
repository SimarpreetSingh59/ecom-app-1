<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body style="overflow-x: hidden">

        <nav class="navbar bg-primary navbar-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}" >ECommerce</a>
    
                <div class="d-flex">
                    @if (Route::has('login'))
                            <div class="hidden">
                    @auth
                        {{-- Links After Auth will display here! --}}
                        <a href="{{ route('cart') }}" class="btn btn-dark">Cart</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            
            </div>
        </nav>
            
        <div id="app">
    
            <main>
                @yield('content')
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    
</body>
</html>