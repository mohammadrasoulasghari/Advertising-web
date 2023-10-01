<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function indexPage()
    {
        return view('panel-admin.panel');
    }
    public function addCategory()
    {
        return view('panel-admin.add-category');
    }
}
