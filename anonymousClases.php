<?php
//// Strict Type Declaration
//declare(strict_types=1);
//
//
//
//// Scaler Type Declaration
//function M(int $a)
//{
//	echo $a."<br>";
//}
////M("asde");
//M(10);
//M(true);
// Normal Class
//class Student
//{
//	public $Name="ali";
//	public $Phone="0320-98653";
//	public $Email="Ali@gmail.com";
//	
//	
//}
//$obj= new Student;
//echo $obj->Name."<br>";
//echo $obj->Phone."<br>";
//echo $obj->Email."<br>";

$obj=new class{
	
	public $Name="Ali";
};
echo $obj->Name;


?>












