<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    function getCourse ($name) {
        return "My course is ${name}";
    }
}
