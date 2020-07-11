<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index()
    {
        $user = "1";
        $user = User::findorFail($user);
        return view('index', compact('user'));
    }

    public function store()
    {
        dd(\request()->all());

    }


}
