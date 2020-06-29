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
            <div class="top-nav nav-container">
                <div class="logo">
                <a href="/"><img src="img/vindami_logo_black.png" alt="logo black"></a>
                </div>
                <input id="nav-searchbar" type="text" placeholder="Search..">
                <ul>
                    <li><a class="btn" href="#pakete">Pakete</a></li>
                    <li><a class="btn" href="#rotweine">Rotweine</a></li>
                    <li><a class="btn" href="#weißweine">Weißweine</a></li>
                    <li><a class="btn" href="#champagner">Champagner</a></li>
                    <li><a class="btn" href="#warenkorb"><i class="fas fa-shopping-cart"></i></a>
                        @if(Cart::count() > 0)
                            <span>{{ Cart::count() }}</span></li>
                        @endif
                </ul>
            </div>
        </nav>
        @if (session()->has('success_message'))
            <div class="">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Cart::count() > 0)
            <h2>{{ Cart::count() }} Artikel im Warenkorb</h2>
            <!-- Cart table -->
            <div class="cart-product-table container">
                <div>
                    <h3></h3>
                    <h3>Artikel</h3>
                    <h3>Anzahl</h3>
                    <h3>Einzelpreis</h3>
                    <h3>Gesamtsumme</h3>
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
                    <p>

                    </p>
                    <p>
                       {{ $item->model->presentPrice() }}
                    </p>
                    <p>
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="">Entfernen</button>
                        </form>
                    </p>
                </div>
                    
                @endforeach
            </div>
        @else
            <h2>Keine Artikel im Warenkorb</h2>
        @endif


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
