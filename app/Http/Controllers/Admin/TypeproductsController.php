<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typeproducts;
use Illuminate\Http\Request;

class TypeproductsController extends Controller
{
    public function index(){
        $typeproducts = Typeproducts::Paginate(4);
        return view('admin.typeproducts.index',compact('typeproducts'));


    }

    
}
