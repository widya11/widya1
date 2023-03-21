<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ToolController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries'])->latest()->paginate(32);

        return view('pages.tool', [
            'products' => $products
        ]);
    }
}
