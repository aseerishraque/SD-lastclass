<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Employee;
class AuthController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginstore(Request $req){
    	$email = $req->email;
    	//$password = md5($req->password);
    	echo Hash::make($req->password);

    	// select * from employees where email='.$email.' AND password='.$password.'
    	// $obj = Employee::where('email','=',$email)
		   //  		   ->where('password','=', $password)
		   //  		   ->first(); // returns only one row

    	// if($obj){ // successfully logged in
    	// 	$req->session()->put('userid', $obj->id);
    	// 	$req->session()->put('username', $obj->name);
    	// 	$req->session()->put('userrole', $obj->role);

    	// 	return redirect()->to('/');
    	// }
    	// else {
    	// 	echo 'Invalid email or password';
    	// }
    }
}
