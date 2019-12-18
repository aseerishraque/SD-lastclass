<!DOCTYPE html>
<html lang="en">

<head>
  @include('website.includes.head')
  <style>
  	@media only screen and (max-width: 768px) {
	  body {
	    background-color: lightblue;
	  }
	  .display-3 {
	  	font-size: 30px;
	  }
	}
  </style>
</head>

<body>

  @include('website.includes.header')
  
  @yield('abc')

  @include('website.includes.footer')

  @yield('script')

</body>

</html>
