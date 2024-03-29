<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Typeproducts;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::Paginate(4);
        return view('admin.product.index',compact('products'));
    }

    public function from_add()
    {
        $typeproduct = Typeproducts::all();
        return view('admin.product.from', compact('typeproduct'));
    }
    
    public function add(Request $request)
    {
        $products = new Products();
        $products->name = $request->name;
        $products->details = $request->details;
        $products->price = $request->price;
        $products->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('product.index');
    }
    



    public function edit($id){

        $product = Products::find($id);

        return view('admin.product.edit',compact('product'));

    }



    public function update(Request $request, $id){

        $products = Products::find($id);
        $products->name = $request->name;
        $products->details = $request->details;
        $products->price = $request->price;
        $products->update();

        // toast('แก้ไขข้อมูลสำเร็จ','success');

        return redirect()->route('product.index');

    }

    public function delete($id){

        $products = Products::find($id);

        $products->delete();

        // toast('ลบข้อมูลสำเร็จ','success');

        return redirect()->route('product.index');

    }
}
