<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
	public function index()
	{

		$teachers=Teacher::get();
		return View("Teacher.index")->with("teachers",$teachers);
	}



	public function create()
	{
		return view('Teacher.create');
	}

	public function submit(Request $req)
	{
		// .......
		$teacher=new Teacher;
		$teacher->Name=$req->Name;
		$teacher->Phone=$req->Phone;
	
		if($teacher->save())
		{
			return redirect()->action("TeacherController@index");
		}
		else
		{
			return view('Teacher.create');
		}
		
		
	}



}
