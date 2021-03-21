<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends ApiController
{
    public function index()
    {
        $products = Product::all();
    
        return $this->sendResponse($products, 'Успешно.');
    }
    public function show(int $id)
    {
        $product = Product::find($id);
        return $this->sendResponse($product, 'Успешно.');
    }
}
