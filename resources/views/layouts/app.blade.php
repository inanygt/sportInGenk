<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sportingenk</title>

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/main.scss', 'resources/js/app.js'])

        <body>
            <nav>
                <div class="nav-container">
                    <div class="nav-img-container">
                        <img src="{{ asset('images/logo.svg') }}" alt="">
                    </div>

                    <label class="menu-btn" for="toggle">Menu</label>
                    <input type="checkbox" id="toggle">

                    <div class="sidenav">
                        <ul>
                            <li class="sidenav-li"><a href="/">Home</a></li>
                            <li class="sidenav-li"><a href="/">Zwembad</a></li>
                            <li class="sidenav-li"><a href="/">Kinderen</a></li>
                            <li class="sidenav-li"><a href="/">Scholen</a></li>
                            <li class="sidenav-li"><a href="/">Sportclubs</a></li>
                            <li class="sidenav-li"><a href="/">Sportingenk Park</a></li>
                            <li class="sidenav-li"><a href="/">Gratis sporten</a></li>
                            <li class="sidenav-li"><a href="/">Wist je dat...</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                @yield('content')
            </div>
        </body>
    </head>
    <body>
    </body>
</html>
