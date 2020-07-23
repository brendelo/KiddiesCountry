<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClassesController extends Controller
{


    public function index()
    {
        $user =1;
        $user = User::findorFail($user);
        return view('classes', compact('user'));
    }

    public function update()
    {
        $data = \request()->validate([
            'classesmainimage' => ['image'],
            'classesheader1' => [],
            'classesintro1' => [],
            'classesheader2' => [],
            'classesintro2' => [],

        ]);

        //dd($data);

        if (\request('classesmainimage'))
        {
            $imagepath = \request('classesmainimage')->store('uploads','public');
            $image = Image::make(public_path('storage/'.$imagepath))->fit(1080,467);
            $image->save();

            $imagearray = ['classesmainimage' => $imagepath];
        }



        auth()->user()->classes()->update(array_merge(
            $data,
            $imagearray ?? []
        ));

        return redirect('classesform');
    }
}
