<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\User;
use Illuminate\Http\Request;

class companyController extends Controller
{
    function index(){
        $company=companies::all();
        return view('company',compact('company'));

    }
}
