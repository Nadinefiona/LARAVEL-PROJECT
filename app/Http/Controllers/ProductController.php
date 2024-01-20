<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Add the import statement for the Product model
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the input data before creating a new product
        $request->validate([
            'photo' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        // Create a new product with the validated data
        $product = Product::create([
            'photo' => $request->input('photo'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),

            // Add other fields as needed
        ]);

        // return redirect('product')->with('flash_message', 'Product Added!');
        return redirect('/product')->with('flash_message', 'Product added successfully!');

    }
}
