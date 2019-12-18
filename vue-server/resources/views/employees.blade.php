<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
</head>
<body>
	<h2>All Employeees</h2>
	<table id="myTable">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Country</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($employees as $emp)
			<tr>
				<td>{{ $emp->name }}</td>
				<td>{{ $emp->email }}</td>
				<td>{{ $emp->country }}</td>
				<td>{{ $emp->city }}</td>
				<td><button>Edit</button></td>
				<td><button>Delete</button></td>
			</tr>
			@endforeach

		</tbody>
		<tfoot>
			<th>Name</th>
			<th>Email</th>
			<th>Country</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</tfoot>
	</table>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>


	<script>
		$(document).ready(function () {
			$('#myTable tfoot th').each( function () {
		        var title = $(this).text();
		        if(title!='Edit' && title!='Delete'){
		        	console.log(title);
		        	$(this).html('<input type="text" placeholder="Search '+title+'" />');
		        }
		    } );
		    var table = $('#myTable').DataTable({
		    	"columnDefs": [
				    { "orderable": false, "targets": [4,5] }
				],
				dom: 'Bfrtip',
		        buttons: [
		            'excelHtml5',
		            'csvHtml5',
		            'pdfHtml5'
		        ]
		    });

		    table.columns().every( function () {
		        var that = this;
		        $( 'input', this.footer() ).on( 'keyup change clear', function () {
		            if ( that.search() !== this.value ) {
		                that
		                    .search( this.value )
		                    .draw();
		            }
		        } );
		    });
		});
	</script>
</body>
</html>