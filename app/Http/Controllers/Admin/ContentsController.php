<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index(){
        $contents = Contents::Paginate(4);
        return view('admin.contents.index',compact('contents'));
    }
    public function from_add()
    {
        return view('admin.contents.from');
    }
    
    public function add(Request $request)   
    {
        $contents = new Contents();
        $contents->name = $request->name;
        $contents->details = $request->details;
        $contents->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('contents.index');
    }



    public function edit($id){

        $contents = Contents::find($id);

        return view('admin.contents.edit',compact('contents'));

    }



    public function update(Request $request, $id){

        $contents = Contents::find($id);

        $contents->name = $request->name;
        $contents->details = $request->details;
        $contents->update();

        // toast('แก้ไขข้อมูลสำเร็จ','success');

        return redirect()->route('contents.index');

    }

    public function delete($id){

        $contents = Contents::find($id);

        $contents->delete();

        // toast('ลบข้อมูลสำเร็จ','success');

        return redirect()->route('contents.index');

    }


    
}

