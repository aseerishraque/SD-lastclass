<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;
class UploadController extends Controller
{
    public function viewpage(){
    	$images = ImageModel::all();
    	//dd($images->filename);
    	return view('upload', ['files'=>$images]);
    }

    public function store(Request $request)
    {
       
        $rawImage= $request->file('filename');

        $originalimage = Image::make($rawImage);

        $extension_only = $rawImage->getClientOriginalExtension();

        $userid = 12345;
        

        $current_time = time();
        
        $name =  $current_time.'_'.$userid.'.'.$extension_only;
        // dd($name);

        //$thumbnailImage = Image::make($originalImage);

        //$thumbnailPath = public_path().'/uploads/thumbnail/';
        $originalPath = public_path().'/uploads/images/';

        $originalimage->save($originalPath.$name);

        $thumbnailPath = public_path().'/uploads/thumbnail/';
        // $originalimage->resize(150,150);

        $originalimage->save($thumbnailPath.$name, 50);
        // $thumbnailImage->save($originalPath.$name);

        // $thumbnailImage->resize(150,150);
        // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        $imagemodel= new ImageModel();
        $imagemodel->filename=$name;
        $imagemodel->save();

        return back()->with('success', 'Your images has been successfully Uploaded');

    }
}
