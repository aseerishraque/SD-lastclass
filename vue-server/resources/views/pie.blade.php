<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#app{
			margin: 10px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div id="app">
		<h2>Dynamic Pie Charts</h2>
		<div id="my_pie" style="width: 900px; height: 500px;"></div>
	</div>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		 google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Products'],
          @foreach($results as $r)
          ['{!! $r->cname !!}', {{ $r->total }}],
          @endforeach
        ]);

        var options = {
          title: 'Category vs Products',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('my_pie'));
        chart.draw(data, options);
      }
	</script>
</body>
</html>