<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function admin(){
        return view('admin.admin');
    }

    public function home(){
        return view('admin.adminhome');
    }

    public function showindexform(){
        $user = auth()->user();
        return view('admin.admin_forms.indexform', compact('user'));
    }

    public function showaboutform(){
        $user = auth()->user();
        return view('admin.admin_forms.aboutform', compact('user'));
    }

    public function  showclassesform(){
        $user = auth()->user();
        return view('admin.admin_forms.classesform', compact('user'));
    }
    public function  showteacherform(){
        $user = auth()->user();
        return view('admin.admin_forms.teacherform', compact('user'));
    }
    public function  showteacherupdateform(){
        $user = auth()->user();
        return view('admin.admin_forms.teacherupdateform', compact('user'));
    }

    public function  showcourseform(){
        $user = auth()->user();
        return view('admin.admin_forms.coursesform', compact('user'));
    }


}
