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
        $contacts->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('contacts.index');
    
}
}