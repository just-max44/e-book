@extends('layouts/head')
<body>
@extends('layouts.master')
@section('content')

    @foreach($products as $product)
        <div class="container-fluid w-50">
            <div class="row g-0 border border-5 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <small class="d-inline-block mb-2">
                        @foreach($product->categories as $category)
                            {{ $category->name }}{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </small>
                    <h5 class="mb-0">{{$product->title}}</h5>
                    <p class="card-text mb-auto mt-0">{{$product->subtitle}}</p>
                    <strong class="b-auto font-weight-normal text-secondary">{{formatPrice($product->price)}}</strong>
                    <a href="{{route('products.show', $product->slug)}}" class="stretched-link btn btn-dark">voir article</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" style="max-width: 150px; max-height: 290px">
                </div>
                {{ $products->appends(request()->input())->links() }}
            </div>
        </div>
    @endforeach
@endsection

</body>
</html>
