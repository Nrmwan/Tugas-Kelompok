<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Heaven</title>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

        <!-- Latest compiled and minified CSS -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Fashion<span>Heaven</span>.</a>

        <div class="navbar-nav">
           | <a href="/">Home</a> |
            <a href="#">About</a> |
            <a href="{{ route ('menu') }}">Shpo</a> |
            <a href="#">Shop</a> |
            <a href="#">Our Location</a> |
        </div>

        <div class="navbar-extra">
            {{-- <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> --}}
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            @if (Route::has('login'))
            <div class="icon">
                    <a href="#" id="search"><i data-feather="search"></i></a>
                    @auth
                        <a href="{{ url('/home') }}" class="icon">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="icon"><i data-feather="log-in"></i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="icon ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

</nav>
<!-- Navbar End -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

<!-- Content -->
@yield('contentt')
<!-- End Content -->

    <script>
        feather.replace()
    </script>

    {{-- my java scrip --}}
    <script src="js/script.js"></script>

        <!-- jQuery library -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

<!-- Latest compiled JavaScript -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</body>
</html>