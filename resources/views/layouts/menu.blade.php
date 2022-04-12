@include('layouts/head')
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="text-center">
                <a class="blog-header-logo text-dark" href="#">E-Book</a>
            </div>
        </div>
    </header>
</div>
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Votre médiathèque s'adapte !</h1>
            <p class="lead my-3">Profitez de notre tout nouveau service, le click & collect</p>
            <p class="lead mb-0"><a href="{{ route('products.index') }}" class="text-white fw-bold">Accéder à la boutique</a></p>
        </div>
    </div>
</main>

