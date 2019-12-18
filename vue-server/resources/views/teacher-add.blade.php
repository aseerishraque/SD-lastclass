<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-8" style="margin-top: 25px; margin-left: 10%">
			
			<form method="post" action="{{ URL::to('teacher-store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<input class="form-control" value="{{ old('name') }}"  name="name" type="text" placeholder="Name">
					<span class="error">{{ $errors->first('name') }}</span>
				</div>
				<div class="form-group">
					<input class="form-control" value="{{ old('email') }}"  name="email" type="text" placeholder="Email">
					<span class="error">{{ $errors->first('email') }}</span>
				</div>
				<div class="form-group">
					<input class="form-control" value="{{ old('birth_date') }}" name="birth_date" type="text" placeholder="Birth Date">
					<span class="error">{{ $errors->first('birth_date') }}</span>
				</div>
				<div class="form-group">
					<input class="form-control" value="{{ old('salary') }}" name="salary" type="text" placeholder="Salary">
					<span class="error">{{ $errors->first('salary') }}</span>
				</div>
				<div class="form-group">
					<input type="submit" value="submit">
				</div>	
			</form>
		</div>
	</div>
</body>
</html>