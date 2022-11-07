<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = Abouts::Paginate(4);
        return view('admin.about.index',compact('abouts'));
    }

    public function from_add()
    {
        return view('admin.about.from');
    }
    
    public function add(Request $request)
    {   
        $about = new Abouts();
        $about->name = $request->name;
        $about->details = $request->details;
        $about->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('about.index');
    }


    public function edit($id){

        $about = Abouts::find($id);

        return view('admin.about.edit',compact('about'));

    }



    public function update(Request $request, $id){

        $about = Abouts::find($id);
        $about->name = $request->name;
        $about->details = $request->details;
        $about->update();

        // toast('แก้ไขข้อมูลสำเร็จ','success');

        return redirect()->route('about.index');

    }

}
