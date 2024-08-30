<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationController extends Controller
{
    function index () {
        return view("information");
    }
}
