<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        return view('product', [
            // "product" => Product::with(['tags', 'details', 'images'])->find($id),
            "product" => Product::find($id),
            "users" => User::where('role', 'user')->get()
        ]);
    }
}
