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


		return View("Student.index")
				->with("students",$students);
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
		if($req->imgFile)
		{
			$imgPath=$req->imgFile->store('uploads','public');
			$std->Image=$imgPath;
		}


		if($std->save())
		{
			return redirect()->action("StudentController@index");
		}
		else
		{
			return view('Student.create');
		}
		
		
	}

	public function delete(Request $req)
	{

		$isDeleted=Student::where(["StudentId"=>$req->id])->delete();
		return redirect()->action("StudentController@index");
		

	}

	public function edit(Request $req)
	{
		$std=Student::where(["StudentId"=>$req->id])->first();


		return view('Student.update')->with("std",$std);
	}

	public function update(Request $req)
	{
		$isUpdate=Student::where(["StudentId"=>$req->StudentId])
				->update([
					"Name"=>$req->Name,
					"Phone"=>$req->Phone,
					"Email"=>$req->Email,

				]);


		if($isUpdate)
		{
			return redirect()->action("StudentController@index");

		}
		else
		{
			$std=Student::where(["StudentId"=>$req->StudentId])->first();
			return view('Student.edit')->with("std",$std);
		}


	}



}
