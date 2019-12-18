<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- <form method="post" action="{{ URL::to('products') }}"> -->
	<form method="post" action="{{ route('myproduct.store') }}">
		@method('PUT')
		{{ csrf_field() }}
		<input type="text" name="name">
		<input type="text" name="price">

		<input type="submit" value="Submit">
	</form>
</body>
</html>