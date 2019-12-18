<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Uploading</title>
</head>
<body>
	<h2>Image Uploading</h2>
	@if(Session::has('success'))
	<span style="color:green;"> {{ Session::get('success') }}</span>
	@endif
	<form method="post" action="{{ URL::to('uploadimage') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" multiple name="filename[]">
		<br>
		<input style="margin-top:10px" type="submit" value="Submit">
	</form>
	@foreach($files as $file)
	<img src="{{ URL::to('uploads/thumbnail/'.$file->filename) }}" width="200" height="300" alt="">
	@endforeach
	
</body>
</html>