@include('layouts/head')
@extends('layouts.master')
@section('content')
<div class="col-md-12">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">
                <p class="text-info text-opacity-75" style="font-size: 13px">{{ $stock }}</p>
                @foreach($product->categories as $category)
                    {{ $category->name }}{{ $loop->last ? '' : ', ' }}
                @endforeach
            </strong>
            <h5 class="mb-0">{{ $product->title }}</h5>
            <p class="text-muted mb-auto">{!! $product->description !!}</p>
            <strong class="mb-auto">{{ formatPrice($product->price) }}</strong>
            @if($stock === 'Disponible')
            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" aria-hidden="true" class="btn btn-success"><i class="fa fa-shopping-bag m-1"></i> Ajouter au panier</button>
            </form>
            @endif
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{ asset('storage/' . $product->image) }}" alt="image du produit" style="max-width: 150px; max-height: 290px">
        </div>
    </div>
</div>
@endsection
