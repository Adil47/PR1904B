<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;


    public function Students()
    {
    	return $this->hasMany("App\Models\Student","TeacherId","TeacherId");
    }


}
