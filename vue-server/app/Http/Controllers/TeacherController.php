<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add(){
    	return view('teacher-add');
    }

    public function store(Request $request){
    	// raw level query
    	// $email = $request->email;$_POST['email']
    	// $sql = select * from teachers where email='$email'
    	// if($sql)
    	// $name = $request->name;
    	$validatedData = $request->validate([
	        'name' => 'required',
	        'email' => 'required|email|unique:teachers,email',
	        'salary' => 'required|integer|between:2000,3000',
	        //'birth_date' => 'required|date'
	        'birth_date' => 'required|date|before_or_equal:2000-12-12'
	    ]);
    }
}
