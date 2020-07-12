<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $user = "1";
        $user = User::findorFail($user);
        return view('index', compact('user'));
    }

    public function update()
    {

        $data = \request()->validate([
            'header1' => [],
            'intro' => [],
            "lessonheader" => [],
            "lessontext" => [],
            "lessonsummary" => [],
            'lessonimage' => ['image'],
            'mainimage' => ['image'],

        ]);

        if(\request('lessonimage')){
            $imagePath2 = request('lessonimage')->store('uploads', 'public');
            $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(780, 1000);
            $image2->save();

            $imagearray1= ['lessonimage' => $imagePath2];
        }

        if (\request('mainimage')){
            $imagePath1 = request('mainimage')->store('uploads', 'public');


            $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(1920, 660);
            $image1->save();

            $imagearray2 = ['mainimage' => $imagePath1];
        }

        $imagearray = array_merge($imagearray1 ?? [], $imagearray2 ?? []);

//        dd($imagearray);



        auth()->user()->index()->update(array_merge(
            $data,
            $imagearray ?? []
        ));

        return redirect('indexform');


    }


}
