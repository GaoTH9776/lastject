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
}
