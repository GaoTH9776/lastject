<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contacts::Paginate(4);
        return view('admin.contacts.index',compact('contacts'));
    }
    public function from_add()
    {
        return view('admin.contacts.from');
    }
    
    public function add(Request $request)
    {
        $contacts = new Contacts();
        $contacts->name = $request->name;
        $contacts->details = $request->details;
        $contacts->image = $request->image;
        $contacts->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('contacts.index');
    
}



public function edit($id){
$contacts=  Contacts::find($id);

return view('admin.contacts.edit',compact('contacts'));

}



public function update(Request $request, $id){

$contacts =  Contacts::find($id);
$contacts->name = $request->name;
$contacts->details = $request->details;
$contacts->image = $request->image;
$contacts->update();

// toast('แก้ไขข้อมูลสำเร็จ','success');

return redirect()->route('contacts.index');

}


public function delete($id){

    $contacts = Contacts::find($id);

    $contacts->delete();

    // toast('ลบข้อมูลสำเร็จ','success');

    return redirect()->route('contacts.index');

}
}