<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class studentController extends Controller
{
    function index(){
        $std = Student::all();
        $sql = DB::select('SELECT * FROM students');
        $scount = count($sql);


        return view('student', compact('std','scount'));

    }

    function insert(Request $request){
        $std = new student;
        $std->stu_name = $request->stu_name;
        $std->age = $request->age;
        $std->grade = $request->grade;
        $std->save();
       return redirect()->back();
    }


    function update(Request $request,$id){
        $std = Student::all();
        $stds = student::where('id',$id)->first();
        return view('student',compact('stds' , 'std'));
    }

    function updated(Request $request){
        $stds = student::where('id',$request->id)->first();
        $stds->stu_name = $request->stu_name;
        $stds->age = $request->age;
        $stds->grade = $request->grade;
        $stds->save();
        return redirect()->back();
    }



    function delete($id){
       $delete = student::destroy($id);
        return redirect()->back();
    }
}
