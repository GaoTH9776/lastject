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

    public function from_add()
    {
        return view('admin.typeproducts.from');
    }
    
    public function add(Request $request)
    {
        $typeproducts = new Typeproducts();
        $typeproducts->name = $request->name;
        $typeproducts->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('typeproducts.index');
    }
}
