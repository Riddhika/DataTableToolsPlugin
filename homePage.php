<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
 <!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.bootstrap.min.css"/>

<title>Test Code</title>
</head>
<body>
<?php
require __DIR__ .'/view/view_table.php';


echo "<div class='container' style='padding-top:200px;padding-bottom:50px;'>";

			$view_object= new view_table();
			echo $view_object->view_table_data("dynamic_table","example");

echo "</div>";

?>
</body>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
<!--Button specific-->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src=".https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js"></script>
<!--External Links for Excel& PDF Button specific-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
       	lengthChange: false,
        buttons: true
    } );
 	table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
	
} );

</script>
</html>
