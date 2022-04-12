<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index (Category|null $category = null): View
    {
        if ($category) {
            $products = $category->products()->latest()->paginate(60);
        } else {
            $products = Product::with('categories')->paginate(60);
        }

        return view('products.index', compact('products'));

    }

    public function show(Product $product): View
    {
        $stock = $product->stock === 0 ? 'Indisponible' : 'Disponible';

        return view('products.show', [
            'product' => $product,
            'stock' => $stock
        ]);
    }

    public function search()
    {
        $q = request()->input('q');

        $products = Product::where('title', 'like', "%$q%")
            ->paginate(30);

            return view('products.search')->with('products', $products);
    }
}
