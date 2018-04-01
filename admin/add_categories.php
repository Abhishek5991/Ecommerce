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
			<div class='col-md-12'> Product Categories </div>
		</div>
		
		
		
		
		
		
		
		
		<div class='row cat_table'>			
			<div class='col-md-6 dropdown'>
				<div class='cat_box dropbtn' onclick='dropdownfun()'>
					<i class='fa fa-chevron-right'></i> 
					<span> Home </span>					
				</div>
				<ul id='cat_demo' class='drop-content'>	
				
					<li><a data-toggle='modal' data-target='#addCat'>Add Category</a></li>
					
					<div class='modal fade' id='addCat' role='dialog' style='top: 25px;'>
						<div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
								<div class='modal-header'>
									<button type='button' class='close' data-dismiss='modal'>&times;</button>
									<h4 class='modal-title'>Enter Category</h4>
								</div>
								<div class='modal-body'>
									<input type='text' placeholder='Enter Cat Name' name='cat_name'/>
								</div>
								<div class='modal-footer'>
									<button type='submit' onclick='addCatFun()' data-dismiss='modal' class='btn btn-primary' >Add</button>
									<button class='btn btn-danger' data-dismiss='modal'>Close</button>
								</div>
							</div>
						  
						</div>
					</div>					
					
					<li><a data-toggle='modal' data-target='#editCat'>Edit Category</a></li>
					
					<div class='modal fade' id='editCat' role='dialog' style='top: 25px;'>
						<div class='modal-dialog'>
						
							<!-- Modal content-->
							<div class='modal-content'>
								<div class='modal-header'>
									<button type='button' class='close' data-dismiss='modal'>&times;</button>
									<h4 class='modal-title'>Enter Category</h4>
								</div>
								<div class='modal-body'>
									<input type='text' placeholder='Edit Cat Name' name='cat_name'/>
								</div>
								<div class='modal-footer'>
									<button type='submit' onclick='editCatFun()' data-dismiss='modal' class='btn btn-primary' > Update</button>
									<button class='btn btn-danger' data-dismiss='modal'>Close</button>
								</div>
							</div>
						  
						</div>
					</div>
					
					<li><a href='del_category.php'>Delete Category</a></li>
				</ul> 
				
				
	<script>
		function dropdownfun() {
			document.getElementById('cat_demo').classList.toggle('show');
		}
		function addCatFun(){
			if (!event.target.matches('.dropbtn')) {

				var dropdowns = document.getElementsByClassName('drop-content');
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show'))
						openDropdown.classList.remove('show');
				  
				}
			}
			
			
		}
	</script>
	
	
	
	
	
	
	
	
			</div>
			
			<div class='col-md-6'>
				<table class='table table-striped table-hover table-responsive'>
					<thead>
						<tr>
							<th>Cat id <span class='glyphicon glyphicon-sort-by-attributes'></span></th>
							<th>Cat name <span class='glyphicon glyphicon-sort'></span></th>
							<th>Par id</th>
							<th>Par name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2</td>
							<td>Dry Fruits</td>
							<td>1</td>
							<td>Home</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Spices</td>
							<td>1</td>
							<td>Home</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Groceries</td>
							<td>1</td>
							<td>Home</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Home Care</td>
							<td>1</td>
							<td>Home</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Medical</td>
							<td>1</td>
							<td>Home</td>
						</tr>						
					</tbody>
				</table>
			</div>
			<div class='clearfix'></div>
		</div>
		
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->  
				

    <!-- jQuery -->
    <script>
	
	
	
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

</body>

</html>
