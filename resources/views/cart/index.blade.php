@extends('layouts/head')
<body>
@extends('layouts.master')
@section('content')
    @if(Cart::count() > 0)
    <div class="px-4 px-lg-0">
        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="p-2 px-3 text-uppercase">Produits</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Prix</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Supprimer</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (Cart::content() as $product)
                                <tr>
                                    <td class="border-0 align-middle">{{ $product->name }}</td>
                                    <td class="border-0 align-middle"><strong>{{ formatPrice($product->price) }}</strong></td>
                                    <td class="border-0 align-middle">
                                        <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-dark"><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Code de réduction</div>
                        @if(!request()->session()->has('coupon'))
                        <div class="p-4">
                            <p class="font-italic mb-4">Entrez le code ci-dessous</p>
                            <form action="{{ route('cart.store.coupon') }}" method="POST">
                                @csrf
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" placeholder="Entrez votre code ici" aria-describedby="button-addon3" class="form-control border-0" name="code">
                                    <div class="input-group-append border-0">
                                        <button id="button-addon3" type="submit" class="btn btn-success px-4 rounded-pill">
                                            <i class="fa fa-gift m-2"></i>Valider
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
                            <div class="p-4">
                                <p class="font-italic mb-4">Un coupon est déjà appliqué</p>
                            </div>
                        @endif
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">L'adresse de récupération de votre commande :</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">7 rue de la librairie, 75000 Paris</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détail de la commande </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Vos achats sont soumis à une taxe de 20%</p>
                            <form action="{{ route('checkout.store') }}" method="post">
                                @csrf
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom">
                                        <strong class="text-muted">Sous-total</strong>
                                        <strong>{{ formatPrice(Cart::subtotal()) }}</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom">
                                        @if (request()->session()->has('coupon'))
                                    <strong>Votre code: {{ request()->session()->get('coupon')['code'] }}</strong>
                                    <strong>{{ formatPrice(request()->session()->get('coupon')['remise']) }}</strong></li>
                                    @endif
                                    <li class="d-flex justify-content-between py-3 border-bottom">
                                        <strong class="text-muted">Taxe</strong><strong>{{ formatPrice(Cart::tax()) }}</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">{{ formatPrice((Cart::total() - session()->get('coupon.remise', 0)) + (0.09 + config('cart.tax') / 100)) }}</h5>
                                    </li>
                                </ul>
                                <a href="{{ route('checkout.index') }}" class="btn btn-success rounded-pill py-2 btn-block"><i class="fa fa-credit-card" aria-hidden="true"></i> Passer au paiement</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="col-md-12">
        <p>Votre panier est vide</p>
    </div>
@endif

@endsection
