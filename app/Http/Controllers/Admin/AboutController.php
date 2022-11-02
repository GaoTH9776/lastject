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
}
