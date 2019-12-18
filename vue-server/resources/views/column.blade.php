<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Charts</title>
	<style>
		#app{
			margin: 10px;
			padding:10px;		
		}
	</style>
</head>
<body>
	<h2>Column Chart</h2>
	<div id="app">
		<div id="chart_div"></div>
	</div>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawColColors);

		function drawColColors() {
	      var data = new google.visualization.DataTable();
	      data.addColumn('string', 'Week Day');
	      data.addColumn('number', 'Total Sales');

	      data.addRows([
	        ['Sat', 70],
	        [ 'Sun', 67],
	        ['Mon', 90],
	        [ 'Tue', 45],
	        ['Wed', 55]
	      ]);

	      var options = {
	        title: 'Week day Sales',
	        colors: ['#9575cd'],
	        
	      };

	      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	      chart.draw(data, options);
    	}
	</script>
</body>
</html>