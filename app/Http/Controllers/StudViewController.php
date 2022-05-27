<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudViewController extends Controller
{
    public function index(){
        $users = DB::select('select * from student_details');
        return view('stud_view',['users'=>$users]);
        }
}
