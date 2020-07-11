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


        $imagePath1 = request('mainimage')->store('uploads', 'public');
        $imagePath2 = request('lessonimage')->store('uploads', 'public');

        $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(1200, 1200);
        $image1->save();
        $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(1200, 1200);
        $image2->save();

        auth()->user()->index()->create([

            'header1' => $data['header1'],
            'intro' => $data['intro'],
            "lessonheader" => $data['lessonheader'],
            "lessontext" => $data['lessontext'],
            "lessonsummary" => $data['lessonsummary'],
            'lessonimage' => $imagePath2,
            'mainimage' => $imagePath1,

        ]);

        return redirect('indexform');


    }


}
