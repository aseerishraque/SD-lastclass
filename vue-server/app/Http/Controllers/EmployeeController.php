<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
    public function all(){
    	$employees = Employee::all();
    	return view('employees',['employees'=>$employees]);
    }
}
