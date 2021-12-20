<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //

    public function information()
    {
        $title = "Student Profile";

        return view('student.index', compact('title'));
    }
}
