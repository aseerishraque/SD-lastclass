<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::group(['middleware' => 'checkloggedin'], function(){
// 	Route::get('/', function () {
// 	    return view('welcome');
// 	});
// });



// Route::get('login', 'AuthController@login');

// Route::post('loginstore', 'AuthController@loginstore');

// // Route::group(['middleware'=>'checkifteacher'], function(){
// // 	Route::get('create-ct', 'AuthController@login');
// // 	Route::get('enter-ct-marks', 'AuthController@login');
// // });

// // Route::group(['middleware'=>'checkifstudent'], function(){
// // 	Route::get('view-ct-marks', 'AuthController@login');
// // 	Route::get('view-routine', 'AuthController@login');
// // });

// // Layout
// // Route::get('1', function(){
// // 	return view('website.pages.home');
// // });

// Route::get('about', function(){
// 	return view('website.pages.about');
// });

// Route::get('service', function(){
// 	return view('website.pages.service');
// });


// Route::get('teacher-add', 'TeacherController@add');
// Route::post('teacher-store', 'TeacherController@store');

// Route::get('employees', 'EmployeeController@all');


// Route::get('upload', 'UploadController@viewpage');

// Route::post('uploadimage', 'UploadController@store');

// // learning named routes
// Route::get('my-custom-view-1', function(){
// 	return view('view1');
// })->name('v1');

// Route::get('my-custom-view-2', function(){
// 	return view('view2');
// })->name('v2');

// Route::get('my-custom-view-3', function(){
// 	return view('view3');
// })->name('v3');

// Route::get('my-custom-view-4', function(){
// 	return view('view4');
// })->name('v4');

// Route::resource('myproduct','ProductController');
// Route::resource('orders','OrderController');



Route::get('send', 'EmailController@send');

Route::get('column', 'ChartController@column');

Route::get('pie', 'ChartController@pie');

