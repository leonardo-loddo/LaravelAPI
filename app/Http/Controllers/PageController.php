<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    protected static $base_url = 'https://fakestoreapi.com/products';
    public function index(){
        $products = Http::get(self::$base_url)->json();
        return view('index', compact('products'));
    }
    public function show($id){
        $product = Http::get(self::$base_url . '/' . $id)->json();
        return view('show', compact('product'));
    }
}
