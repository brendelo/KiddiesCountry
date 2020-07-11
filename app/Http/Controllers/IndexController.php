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

    public function update()
    {

        $data = \request()->validate([
            'header1' => ['required'],
            'intro' => [],
            "header2" => [],
            "intro2" => [],
            "summary" => [],
            'image1' => ['image'],
            'image2' => ['image'],

        ]);

        auth()->user()->index()->create($data);

//        \App\home::create([
//
//        ]);
        dd(\request()->all());

    }


}
