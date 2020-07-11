<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }

    public function home(){
        return view('admin.adminhome');
    }

    public function showindexform(){
        return view('admin.admin_forms.indexform');
    }
}
