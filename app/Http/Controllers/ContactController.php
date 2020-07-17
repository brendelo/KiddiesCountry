<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{

    public function index()
    {
        $user = 1;
        $user = User::findorFail($user);
        return view('contact', compact('user'));
    }

    public function update(){
        $data = \request()->validate([
           'contactheader' => ['required'],
           'contactaddress'=> ['required'],
           'contactimage' => ['image'],
           'image' => ['image'],
           'phonenumber' => ['required','numeric']
        ]);

        if (\request('image'))
        {
            $imagepath = \request('image')->store('uploads','public');

            $image = Image::make(public_path('storage/'.$imagepath))->fit(1080,474);
            $image->save();
            $imagearray = ['image'=>$imagepath];
        }
        $data = array_merge(
            $data,
            $imagearray ?? []
        );


       auth()->user()->contact()->update($data);

       return redirect('contactform');

    }
}
