<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{


    public function create()
    {
        $data = \request()->validate([
           'coursename' => ['required'],
           'coursedescription' => ['required'],
        ]);

        auth()->user()->courses()->create($data);
        return redirect('coursesform');
    }
}
