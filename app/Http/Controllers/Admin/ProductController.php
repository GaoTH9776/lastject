<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Products::Paginate(4);
        return view('admin.product.index',compact('products'));


    }

    
}
