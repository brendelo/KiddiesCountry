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
            'email' => ['required','email:rfc,dns'],
           'phonenumber' => ['required','numeric'],
        ]);

        if (\request('contactimage'))
        {
            $imagepath = \request('contactimage')->store('uploads','public');

            $image = Image::make(public_path('storage/'.$imagepath))->fit(1080,474);
            $image->save();
            $imagearray = ['contactimage'=>$imagepath];
        }
        $data = array_merge(
            $data,
            $imagearray ?? []
        );

        //dd($data);


       auth()->user()->contact()->update($data);

       return redirect('contactform');

    }
}
