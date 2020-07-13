<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{


    public function index()
    {
        $user = 1;
        $user = User::findorFail($user);
        return view('about', compact('user'));
    }



    public function update()
    {

        $data = \request()->validate([
            'aboutheader1' => [],
            'aboutintro1' => [],
            'aboutheader2' => [],
            'aboutintro2' => [],
            'aboutheader3' => [],
            'aboutintro3' => [],
            'aboutheader4' => [],
            'aboutintro4' => [],
            'aboutheader5' => [],
            'aboutintro5' => [],

            'aboutsideimage' => ['image'],
            'aboutmainimage' => ['image'],
            'aboutsideimage2' => ['image'],

        ]);

        //dd($data);

        if(\request('aboutsideimage')){
            $imagePath2 = request('aboutsideimage')->store('uploads', 'public');
            $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(780, 780);
            $image2->save();

            $imagearray1= ['aboutsideimage' => $imagePath2];
        }

        if (\request('aboutmainimage')){
            $imagePath1 = request('aboutmainimage')->store('uploads', 'public');


            $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(1080, 467);
            $image1->save();

            $imagearray2 = ['aboutmainimage' => $imagePath1];
        }
        if(\request('aboutsideimage2')){
            $imagePath3 = request('aboutsideimage2')->store('uploads', 'public');
            $image3 = Image::make(public_path("storage/{$imagePath3}"))->fit(1920, 1000);
            $image3->save();

            $imagearray3= ['aboutsideimage2' => $imagePath3];
        }

        $preimagearray = array_merge($imagearray1 ?? [], $imagearray2 ?? []);
        $imagearray = array_merge($preimagearray ?? [], $imagearray3 ?? []);

//        dd($imagearray);



        auth()->user()->about()->update(array_merge(
            $data,
            $imagearray ?? []
        ));

        return redirect('aboutform');


    }

}
