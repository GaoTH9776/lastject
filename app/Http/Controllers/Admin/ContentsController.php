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
}
