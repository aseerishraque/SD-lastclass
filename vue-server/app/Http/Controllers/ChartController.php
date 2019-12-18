<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ChartController extends Controller
{
    public function column(){
    	return view('column');
    }

    public function pie(){
    	$results = DB::table('products as p')
    		->leftJoin('categories as c', 'c.id','p.category_id')
    		->select('c.name as cname', DB::raw('count(*) as total'))
    		->groupBy('p.category_id', 'c.name')
    		->get();
    	return view('pie', ['results'=>$results]);

    }
}
