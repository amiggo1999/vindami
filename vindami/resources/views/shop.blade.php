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
        <nav class="bg-dark" id="top-nav">
            <div class="top-nav nav-container">
                <div class="logo">
                <a href="/"><img src="/img/vindami_logo_black.png" alt="logo black"></a>
                </div>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle">
                <ul class="main-nav">
                    <li><a class="btn" href="#pakete">Pakete</a></li>
                    <li><a class="btn" href="#rotweine">Rotweine</a></li>
                    <li><a class="btn" href="#weißweine">Weißweine</a></li>
                    <li><a class="btn" href="#champagner">Champagner</a></li>
                </ul>
                <a class="btn" href="/cart"><div>
                  <i class="fas fa-shopping-cart"></i></a>
                        @if(Cart::count() > 0)
                            <span class="cart-counter">{{ Cart::count() }}</span>
                        @endif
                </div>
            </div>
        </nav>
        <!-- Featured -->
        <section class="featured">
            <div class="container">
                <h1 class="text-center">Alle Weine</h1>
            </div>
            <!-- products -->
            <div class="products container">
                @foreach($products as $product)
                    <div class="product">
                        <img src="{{ $product->img }}" alt="product">
                        <div class="product-container">
                            <a href="/shop/{{ $product->slug }}"><h2>{{ $product->name }}</h2></a>
                            <p>{{ $product->details }}</p>
                            <h3>{{ $product->presentPrice() }} / Flasche</h3>
                            <a href="#" class="product-link">Lebensmittelangaben</a>
                        </div>
                        <a href="product-page.html" class="btn-cart"><i class="fas fa-shopping-cart"></i> In den Warenkorb</a>
                    </div>
                @endforeach
                <!-- End products -->
            </div>
        <footer class="bg-dark">
            <nav class="footer-nav nav-container">
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
