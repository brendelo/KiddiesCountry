<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeachersController extends Controller
{
    public function index(){
        return view('teachers');
    }

    public function create()
    {
        $data = \request()->validate([
            'teachername' => [],
            'teacherclass' => [],
            'teachercourse' => [],
            'teachersummary' => [],
            'teacherimage' => ['image'],
        ]);

        if(\request('teacherimage')){
            $imagepath = \request('teacherimage')->store('uploads', 'public');
            $image = Image::make(public_path('storage/'.$imagepath))->fit(780,978);
            $image->save();
        }

        $image_array = ['teacherimage' => $imagepath];

        //$data = array_merge($data, $image_array);

        //dd($data);

        auth()->user()->teachers()->create(array_merge(
            $data,
            $image_array ?? []
    ));

        return redirect('teachersform');
    }
}
