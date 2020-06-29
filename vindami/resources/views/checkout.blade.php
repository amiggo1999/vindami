<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a4ce366032.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <title>Vindami </title>
    </head>
    <body>
        <!-- Navbar - top-nav -->
        <nav class="bg-dark">
            <div class="top-nav container">
                <div class="logo">
                <a href="index.html"><img src="img/vindami_logo_black.png" alt="logo black"></a>
                </div>
                <input id="nav-searchbar" type="text" placeholder="Search..">
                <ul>
                    <li><a class="btn" href="#pakete">Pakete</a></li>
                    <li><a class="btn" href="#rotweine">Rotweine</a></li>
                    <li><a class="btn" href="#weißweine">Weißweine</a></li>
                    <li><a class="btn" href="#champagner">Champagner</a></li>
                    <li><a class="btn" href="#warenkorb"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </nav>

        <footer class="bg-dark">
            <nav class="footer-nav container">
                <ul>
                    <li><a href="#">Pakete</a></li>
                    <li><a href="#">Rotweine</a></li>
                    <li><a href="#">Weißweine</a></li>
                    <li><a href="#">Champagner</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
