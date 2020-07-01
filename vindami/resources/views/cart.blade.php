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
                    <li><a class="btn" href="/shop">shop</a></li>
                </ul>
                <a class="btn" href="/cart"><div>
                  <i class="fas fa-shopping-cart"></i></a>
                        @if(Cart::count() > 0)
                            <span class="cart-counter">{{ Cart::count() }}</span>
                        @endif
                </div>
            </div>
        </nav>
        <!-- Success Message -->
        <div class="container success-message">
            @if (session()->has('success_message'))
                <div class="">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>{{ Cart::count() }} Artikel im Warenkorb</h2>
        </div>

        @if(Cart::count() > 0)
            <div class="container">
                
                    <!-- Cart table -->
                    <div class="cart-product-table">
                        <div>
                            <h3></h3>
                            <h3>Artikel</h3>
                            <h3>Anzahl</h3>
                            <h3>Einzelpreis</h3>
                            <h3></h3>
                        </div>
                        @foreach(Cart::content() as $item)
                        <div>
                            <p>
                                <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ $item->model->img }}" alt="" class="cart-product-img"></a>
                            </p>
                            <p>
                                <a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
                            </p>
                            <div>
                                <select name="" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <p>
                                {{ $item->model->presentPrice() }}
                            </p>
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="">Entfernen</button>
                            </form>
                        </div>
                        @endforeach
                        <h3 class="total-price">
                            Gesamtsumme: {{ Cart::subtotal() / 100 }} €
                        </h3>
                    </div>
                @else
                    <h2>Keine Artikel im Warenkorb</h2>
                @endif
            </div>
            
        <!-- Footer -->
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
