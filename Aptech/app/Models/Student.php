<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Student extends Model
{
    use HasFactory;


    public function Teacher()
    {
    	return $this->hasOne("App\Models\Teacher","TeacherId","TeacherId");
    }



}
