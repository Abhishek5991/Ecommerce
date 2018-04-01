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
			<div class='col-md-12'> Edit Customer Orders </div>
		</div>
		
		<div class='row edit_cust_cart'>
			<div class='col-md-12 row sub-heading_page'>							
				<div class='col-md-12'> Customer Cart </div>
				<div class='col-md-1'></div>
				<div class='clearfix visible-xs'></div>
			</div>
			
			<div class='edit_cust_cart_table'>
				<div class='row cust_cart_table_head'>
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
					<div class='col-md-4'>
						<select name='cust_cart_tag'>
							<option value='0'>Order Date</option>
							<option value='1'>Helper</option>
							<option value='2'>Labor</option>
							<option value='3'>Driver</option>
							<option value='4'>Product-Manager</option>
							<option value='5'>Shop-Manager</option>
						</select>
					</div>
					<div class='col-md-3'>
						<span>Search: </span>
						<input type='search' placeholder='Customer_id' />
					</div>
				</div>
				<table class='table table-striped table-hover table-responsive'>
					<thead>
						<tr>
							<th>Image <span class='glyphicon glyphicon-sort-by-attributes'></span></th>
							<th>Product </span></th>
							<th>Price </span></th>
							<th>Unit Weight</th>
							<th>Quantity</th>
							<th>Sub Total</th>
							<th>Other Cat</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Image1</td>
							<td>Kaju</td>
							<td><i class='fa fa-inr'></i> 900</td>
							<td>1 kg</td>
							<td>
								<span class='chng_quant'> 11 </span>
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 900</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td>Ata</td>
							<td><i class='fa fa-inr'></i> 330</td>
							<td>10 kg</td>
							<td>
								<span class='chng_quant'> 1 </span>
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 330</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td>Dettol Soap</td>
							<td><i class='fa fa-inr'></i> 84</td>							
							<td>3 pieces</td>							
							<td>
								<span class='chng_quant'> 1 </span>
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 84</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td>Kismis</td>
							<td><i class='fa fa-inr'></i> 400</td>
							<td>1 kg</td>
							<td>
								<span class='chng_quant'> 2 </span> 
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 800</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image5</td>
							<td>Badam</td>
							<td><i class='fa fa-inr'></i> 350</td>
							<td>500 gm</td>
							<td>
								<span class='chng_quant'> 1 </span> 
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 350</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image6</td>
							<td>Paracetamol</td>
							<td><i class='fa fa-inr'></i> 30</td>
							<td>1 packet</td>
							<td>
								<span class='chng_quant'> 3 </span> 
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 90</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
						</tr>
						<tr>
							<td>Image7</td>
							<td>Harpic</td>
							<td><i class='fa fa-inr'></i> 90</td>
							<td>500 mL</td>
							<td>
								<span class='chng_quant'> 1 </span> 
								<span class='chng_sign'>
									<i class='fa fa-plus'></i> 
									<i class='fa fa-minus'></i>
								</span>
							</td>
							<td><i class='fa fa-inr'></i> 90</td>
							<td><a href='#'>Other Cat</a></td>
							<td><a href='#'>Delete</a></td>
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
