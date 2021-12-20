<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherInformationController extends Controller
{
    //
    public function information()
    {
        $title = "Teacher Profile";

        return view('teacher.index', compact('title'));
    }
}
