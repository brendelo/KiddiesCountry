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

    public function update($courseid)
    {

        $data = \request()->validate([
           'coursename' => ['required'],
           'coursedescription' => ['required'],
        ]);

        $courseinfo = auth()->user()->courses()->findorFail($courseid);

        $courseinfo['coursename'] = $data['coursename'];
        $courseinfo['coursedescription'] = $data['coursedescription'];

        $courseinfo->save();

        return redirect('coursesupdateform');

    }


}
