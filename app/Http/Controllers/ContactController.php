<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $user = 1;
        $user = User::findorFail($user);
        return view('contact', compact('user'));
    }
}
