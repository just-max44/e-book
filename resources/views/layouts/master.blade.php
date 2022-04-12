<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>La médiathèque</title>
    @yield('extra-meta')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <link>

    @yield('extra-script')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.4.1/css/bootstrap.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cfa8b0706f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted text-decoration-none" href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping" style="font-size: 20px"></i>
                    <span class="ms-2" style="font-size: 20px">{{ Cart::count() }}</span>
                </a>
                <a class="text-decoration-none ms-5 btn" href="{{ route('contact-form') }}"><span>Nous contacter</span></a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark text-decoration-none" href="{{ route('products.index') }}">E-Book</a>
            </div>
            <div class="col-4 d-flex align-items-center">
                @include('partials.auth')
            </div>
        </div>
    </header>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Votre médiathèque s'adapte !</h1>
            <p class="lead my-3">Profitez de notre tout nouveau service, le click & collect</p>
        </div>
    </div>
    <div>
        @include('partials.search')
    </div>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach(\App\Models\Category::all() as $category)
            <a class="p-2 text-muted text-decoration-none" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
            @endforeach
        </nav>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row mb-2">
        @yield('content')
    </div>
</div>
<footer class="blog-footer">
    <p><a href="https://laravel.com/">ECF</a> - 🛒 Application E-Book avec Laravel 8</p>
    <p>
        <a href="#"><i class="fas fa-arrow-circle-up text-success" style="font-size: 25px"></i></a>
    </p>
</footer>
@yield('extra-js')
</body>
</html>
