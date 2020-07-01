<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a4ce366032.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <title>Vindami - {{ $product->name }}</title>
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
        <!-- Product -->
        <section class="container product-info">
          <div class="product-img">
            <img src="{{ $product->img }}" alt="">
          </div>
          <!-- Product details -->
          <div class="product-details">
            <h1>{{ $product->name }}</h1>
            <table>
              <tr>
                <td><img src="/img/icons/grape-icon.png" alt=""></td>
                <td>{{ $product->grape }}</td>
              </tr>
              <tr>
                <td><img src="/img/icons/wine-bottle-icon.png" alt=""></td>
                <td>{{ $product->type }}, {{ $product->taste }}
                {{ $product->alcohol }}% Vol.</td>
              </tr>
              <tr>
                <td><img src="/img/icons/star-icon.png" alt=""></td>
                <td>{{ $product->awards }}</td>
              </tr>
              <tr>
                <td><img src="/img/icons/wine-barrel-icon.png" alt=""></td>
                <td>{{ $product->stability }}</td>
              </tr>
              <tr>
                <td><img src="/img/icons/bookmark-icon.png" alt=""></td>
                <td>{{ $product->sulfur }}</td>
              </tr>
            </table>
            <!-- Add-to-cart -->
            <h3 class="text-center">{{ $product->presentPrice() }} Pro Flasche</h3>
            <div class="add-to-cart">
              <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <div id="add-to-cart">
                  <input type="number" value="1" min="0" max="99" data-last-valid-value="1">
                  <button type="submit" href="#" class="btn-cart"><i class="fas fa-shopping-cart"></i> <p>In den Warenkorb</p></button>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- Offers -->
          <div class="winery-offers text-center">
              <h4>Weiteres von {{ $product->winery }}</h4>
            @foreach($wineryOffers as $product)
              <div class="product product-offers">
                <a href="/shop/{{ $product->slug }}"><img src="{{ $product->img }}" alt=""></a>
                <div class="product-container">
                  <h2>{{ $product->name }}</h2>
                </div>
                <a href="/shop/{{ $product->slug }}" class="btn-cart btn-read">Jetzt ansehen</a>
              </div>
            @endforeach
          </div>
        </section>
        <!-- Divider -->
        <div class="divider bg-dark">
            <p>Kostenfreier Versand ab 90 €</p>
            <p>Kauf auf Rechnung</p>
            <p>Kundenhotline +49 0000 0000 000</p>
        </div>
        <!-- Product Description -->
        <section class="product-description container">
          <div class="table-product-info">
            <h3>Beschreibung</h3>
            <table>
              <tr>
                <td>Erzeuger:</td>
                <td>{{ $product->winery }}</td>
              </tr>
              <tr>
                <td>Anbaugebiet:</td>
                <td>{{ $product->area }}</td>
              </tr>
              <tr>
                <td>Inhalt:</td>
                <td>{{ $product->content }}</td>
              </tr>
              <tr>
                <td>Passt zu:</td>
                <td>{{ $product{"fits-with"} }}</td>
              </tr>
              <tr>
                <td>Anschrift Hersteller:</td>
                <td>Vinaturel GmbH, Schatzlgasse 30, 82335 Berg/ Germany</td>
              </tr>
              <tr>
                <td>Produktart:</td>
                <td>Weißwein</td>
              </tr>
              <tr>
                <td>Bio-Kontrollstelle:</td>
                <td>{{ $product->control }}</td>
              </tr>
              <tr>
                <td>Restzucker in g/l:</td>
                <td>{{ $product->sugar }}</td>
              </tr>
            </table>
          </div>
          <!-- Winery info -->
          <div class="winery-info">
            <h3>{{ $product->winery }}</h3>
            <img src="img/weingut-keller.jpg" alt="">
            <p>Hat man noch vor Jahren die Trauben noch bei der Genossenschaft abgeliefert, so ist sich Graf Goëss-Enzenberg
              der Qualität seiner Weinberge bewusst geworden und hat den Entschluss gefasst, die Weine selbst zu keltern. Und
              die Qualität seiner Weine hat ihm Recht gegeben. Manincor hat sich zu den absoluten Top-Betrieben in Südtirol
              gemausert, der mittlerweile weit über die Landesgrenzen in Europa und der restlichen Welt einen exzellenten Ruf
              genießt. Unter dem neuen Weingutsdirektor, Helmuth Zozin, der 2008 die Leitung des Weinguts übernommen hat, hat
              Manincor nochmals einen deutlichen Schub nach vorn getan, was die Qualität und den Genuss der Weine anbelangt.
              Nicht zuletzt die konsequente Umstellung auf den biodynamischen Weinbau gibt den Weinen ihren letzten Schliff.
              Nur so, das ist die Grundüberzeugung der Weinmacher, offenbart sich die ganze Qualität des Terroirs.</p>
          </div>

        </section>
        <!-- footer -->
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
