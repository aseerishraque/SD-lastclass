<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Division;
use App\District;
class ApiController extends Controller
{
    public function divisions(){
    	$divisions = Division::all();
    	return response()->json([
    		'data' => $divisions,
    		'error' => false
    	]);	
    }

    public function getdistrictsbydivisionid($division_id){
    	$districts = District::where('division_id',$division_id)->get();
    	return response()->json([
    		'data' => $districts,
    		'error' => false
    	]);
    }
    public function store(Request $req){
    	$name = $req->name;
    	

    	$obj = new Division();
    	$obj->name = $name;
    	if($obj->save()){
    		return response()->json([
                'data' => $obj,
                'error' => false,
                'msg' => 'Successfully Inserted'
            ]);
    	}
    	
    }
}
