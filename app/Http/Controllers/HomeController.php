<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\announcement;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirects');
        }
        else
        {
            return view('auth.login');
        }
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype =='1')
        {
            return view('admin.adminHome');
        }

        else 
        {
            $dataannoun = announcement::all();
            return view('home' , compact('dataannoun'));
        }
    }

    public function studyplan()
    {
        $user = Auth::user()->id;
        $data = DB::select('select 
        courseclasses.classid as class,
        courses.name as cname,
        courseclasses.day as day,
        students.semester as sem
        from studyplans
        Join courseclasses
        on studyplans.classid = courseclasses.classid
        Join courses
        on courseclasses.courseid = courses.courseid
        join students
        on studyplans.studentid = students.studentid
        where
        students.studentid = {{($user)}}'
        );
        return view("studyplan" , compact("data"));
    }

    public function addplan()
    {
        $data = DB::select('select * from students where userid = 359');
        return view("studyplan" , compact("data"));
    }
}
