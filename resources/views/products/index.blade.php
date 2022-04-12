@extends('layouts/head')
<body>
@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-xs-12">
            <div class="box card">
                <div class="cardImg">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="image du produit">
                </div>
                <div class="info">
                    <h3>{{$product->title}}</h3>
                    <h5>{{$product->subtitle}}</h5>
                    <p class="text-dark"><span>{{formatPrice($product->price)}} HT</span></p>

                </div>
                <a href="{{route('products.show', $product->slug)}}" class="mt-auto rounded-bottom text-center btn btn-success">voir l'article</a>
            </div>
        </div>
        @endforeach
    </div>
    {{ $products->appends(request()->input())->links() }}
</div>
@endsection
</body>
</html>
