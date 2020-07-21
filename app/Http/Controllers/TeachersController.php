<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeachersController extends Controller
{
    public function index(){
        $user = 1;
        $user = User::findorFail($user);
        return view('teachers', compact('user'));
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

    public function update($teacherid)
    {

        //dd($teacherid);
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

            $image_array = ['teacherimage' => $imagepath];
        }



        //dd($image_array ?? '');

        $newdata = array_merge($data, $image_array ?? []);

        $theteacher = auth()->user()->teachers()->findorFail($teacherid);


        $theteacher->teachername = $newdata['teachername'];
        $theteacher->teachercourse = $newdata['teachercourse'];
        $theteacher->teacherclass = $newdata['teacherclass'];
        $theteacher->teachersummary = $newdata['teachersummary'];
        if (\request('teacherimage')){
        $theteacher->teacherimage= $newdata['teacherimage'] ;}

        //dd($theteacher);
        $theteacher->save();

        //dd($theteacher);

        return redirect('teacherupdateform');
    }
}
