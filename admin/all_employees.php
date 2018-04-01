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
			<div class='col-md-12'> All Employees </div>
		</div>
		
		<div class='row emp_table'>
			<div class='row emp_table_head'>
				<div class='col-md-5'>
					<span>Show </span>
					<select name='entries'>
						<option value='10'>10</option>
						<option value='25'>25</option>
						<option value='50'>50</option>
						<option value='100'>100</option>
					</select>
					<span> entries</span>
				</div>
				<div class='col-md-4' >
					<select name='emp_tag'>
						<option value='0'>All Tag</option>
						<option value='1'>Helper</option>
						<option value='2'>Labor</option>
						<option value='3'>Driver</option>
						<option value='4'>Product-Manager</option>
						<option value='5'>Shop-Manager</option>
					</select>
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
						<th>Mobile</th>
						<th>Email</th>
						<th>Salary <span class='glyphicon glyphicon-sort'></th>
						<th>Received <span class='glyphicon glyphicon-sort'></th>
						<th>DOJ <span class='glyphicon glyphicon-sort-by-attributes-alt'></span></th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Kanhaiya</td>
						<td>9369119751</td>
						<td>kanhaiyakeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 15000</td>
						<td><i class='fa fa-inr'></i> 10000</td>
						<td>08/20/1965</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Rita</td>
						<td>7860953517</td>
						<td>ritakeshari64@gmail.com</td>							
						<td><i class='fa fa-inr'></i> 10000</td>
						<td><i class='fa fa-inr'></i> 8000</td>
						<td>10/28/1970</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Rahul</td>
						<td>8115404938</td>
						<td>rahulkeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 6000</td>
						<td><i class='fa fa-inr'></i> 5500</td>
						<td>06/28/1992</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Vishal</td>
						<td>8423590494</td>
						<td>vishalkeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 8000</td>
						<td><i class='fa fa-inr'></i> 3000</td>
						<td>01/15/1994</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Abhishek</td>
						<td>9176251176</td>
						<td>abhishekkeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 5000</td>
						<td><i class='fa fa-inr'></i> 1000</td>
						<td>11/25/1995</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>6</td>
						<td>Vikas</td>
						<td>9176254863</td>
						<td>vikaskeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 10000</td>
						<td><i class='fa fa-inr'></i> 8000</td>
						<td>11/10/1995</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>7</td>
						<td>Ayush</td>
						<td>9631234503</td>
						<td>ayushkeshari64@gmail.com</td>
						<td><i class='fa fa-inr'></i> 9000</td>
						<td><i class='fa fa-inr'></i> 7000</td>
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
