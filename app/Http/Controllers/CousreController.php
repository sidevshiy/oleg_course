<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CousreController extends Controller
{
    public function all()
    {
        $courses = Course::all();

        return view('index', compact('courses'));
    }

    public function course($id)
    {
        $course = Course::find($id);
        return view('course', compact('course'));
    }
}
