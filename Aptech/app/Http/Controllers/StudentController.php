<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //


	public function index()
	{


		$students=Student::get();


		return View("Student.index")->with("students",$students);
	}



	public function create()
	{
		return view('Student.create');
	}

	public function submit(Request $req)
	{
		// .......
		$std=new Student;
		$std->Name=$req->Name;
		$std->Phone=$req->Phone;
		$std->Email=$req->Email;
		$std->Password=$req->Password;


		if($std->save())
		{
			return redirect()->action("StudentController@index");
		}
		else
		{
			return view('Student.create');
		}
		
		
	}


}
