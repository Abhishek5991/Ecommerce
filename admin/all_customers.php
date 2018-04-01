<!DOCTYPE>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Go Shopping Admin</title>
	
	<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>	

    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	
	<link href='css/sb-admin.css' rel='stylesheet'>
	
	<script src='js/jquery.js'></script>
	<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	

</head>

<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('admin_navigation.php'); ?>

<div id='page-wrapper'>

	<div class='container-fluid'>

		<!-- Page Heading -->
		<div class='row heading_page'>
			<div class='col-md-1'></div>
			<div class='col-md-12'> All Customer </div>
		</div>
		
		<div class='row cust_table'>
			<div class='row cust_table_head'>
				<div class='col-md-9'>
					<span>Show </span>
					<select name='entries'>
						<option value='10'>10</option>
						<option value='25'>25</option>
						<option value='50'>50</option>
						<option value='100'>100</option>
					</select>
					<span> entries</span>
				</div>
				<div class='col-md-3'>
					<span>Search:  </span>
					<input type='search' />
				</div>
			</div>
			<table class='table table-striped table-hover table-responsive'>
				<thead>
					<tr>
						<th>ID <span class='glyphicon glyphicon-sort-by-attributes'></span></th>
						<th>Uname <span class='glyphicon glyphicon-sort'></span></th>
						<th>Email </th>
						<th>Mobile</th>
						<th>Tag <span class='glyphicon glyphicon-sort'></th>
						<th>DOJ <span class='glyphicon glyphicon-sort-by-attributes-alt'></span></th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Kanhaiya</td>
						<td>kanhaiyakeshari64@gmail.com</td>
						<td>9369119751</td>
						<td>Daily</td>
						<td>08/20/1965</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Rita</td>
						<td>ritakeshari64@gmail.com</td>
						<td>7860953517</td>
						<td>Weekly</td>
						<td>10/28/1970</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Rahul</td>
						<td>rahulkeshari64@gmail.com</td>
						<td>8115404938</td>
						<td>Daily</td>
						<td>06/28/1992</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Vishal</td>
						<td>vishalkeshari64@gmail.com</td>
						<td>8423590494</td>
						<td>15-days</td>
						<td>01/15/1994</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Abhishek</td>
						<td>abhishekkeshari64@gmail.com</td>
						<td>9176251176</td>
						<td>Monthly</td>
						<td>11/25/1995</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>6</td>
						<td>Vikas</td>
						<td>vikaskeshari64@gmail.com</td>
						<td>9176254863</td>
						<td>15-days</td>
						<td>11/10/1995</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>7</td>
						<td>Ayush</td>
						<td>ayushkeshari64@gmail.com</td>
						<td>9631234503</td>
						<td>2-Month</td>
						<td>11/14/1994</td>
						<td><a href='#'>Edit</a></td>
					</tr>
				</tbody>
			</table>
			
			<div class='row all_p_page'>
				<div class='col-md-7 entries'>
					<span>Showing 1-10 of 500 entries</span>
				</div>
				<div class='all_p_pagi col-md-5'>
					<a href='#'>&laquo;</a>
					<a href='#'>1</a>
					<a class='active' href='#'>2</a>
					<a href='#'>3</a>
					<a href='#'>4</a>
					<a href='#'>5</a>
					<a href='#'>&raquo;</a>
				</div>
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->  
				

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

</body>

</html>
