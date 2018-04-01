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
			<div class='col-md-12'> All Orders </div>
		</div>
		
		<div class='row sup_ord_table'>
			<div class='row sup_ord_table_head'>
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
					<select name='sup_ord_cat'>
						<option value='0'>All Products</option>
						<option value='1'>Dry Fruits</option>
						<option value='2'>Spices</option>
						<option value='3'>Grocery</option>
						<option value='4'>Home Care</option>
						<option value='5'>Medical</option>
					</select>
				</div>
				<div class='col-md-3'>
					<span>Search: </span>
					<input type='search' />
				</div>
			</div>
			<table class='table table-striped table-hover table-responsive'>
				<thead>
					<tr>
						<th>Order Id <span class='glyphicon glyphicon-sort-by-attributes'></span></th>
						<th>Supplier </span></th>
						<th>Order Date <span class='glyphicon glyphicon-sort'></th>
						<th>Delivery Date <span class='glyphicon glyphicon-sort'></th>
						<th>Total Amount</th>
						<th>Amount Paid</th>
						<th>Order Status</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>123</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Listed</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>124</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Listed</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>125</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Paid</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>126</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Delivered</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>127</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Partially Paid</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>6</td>
						<td>128</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Delivered</td>
						<td><a href='#'>Edit</a></td>
					</tr>
					<tr>
						<td>7</td>
						<td>129</td>
						<td>08/20/2018</td>
						<td>11/20/2018</td>
						<td><i class='fa fa-inr'></i> 100000</td>
						<td><i class='fa fa-inr'></i> 80000</td>
						<td>Partially Paid</td>
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
		
		<div class='row sup_cart_info'>
			<div class='col-md-12 row sub-heading_page'>							
				<div class='col-md-12'> Supplier Cart </div>
				<div class='col-md-1'></div>
				<div class='clearfix visible-xs'></div>
			</div>
			
			<div class='row sup_cart_table'>
				<div class='row sup_cart_table_head'>
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
						<select name='sup_cart_tag'>
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
						<input type='search' placeholder='Supplier_id' />
					</div>
				</div>
				<table class='table table-striped table-hover table-responsive'>
					<thead>
						<tr>
							<th>Image <span class='glyphicon glyphicon-sort-by-attributes'></span></th>
							<th>Product Id</th>
							<th>Product Name </th>
							<th>Cost Price </th>
							<th>Unit Size </th>
							<th>Quantity</th>
							<th>Sub Total</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Image1</td>
							<td>123</td>
							<td>Kaju</td>
							<td><i class='fa fa-inr'></i> 900</td>
							<td>10 kg</td>
							<td>10</td>
							<td><i class='fa fa-inr'></i> 9000</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td>123</td>
							<td>Ata</td>
							<td><i class='fa fa-inr'></i> 330</td>
							<td>10 kg</td>
							<td>20</td>
							<td><i class='fa fa-inr'></i> 6600</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td>123</td>
							<td>Dettol Soap</td>
							<td><i class='fa fa-inr'></i> 84</td>
							<td>3 pieces</td>
							<td>2</td>
							<td><i class='fa fa-inr'></i> 168</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td>123</td>
							<td>Kismis</td>
							<td><i class='fa fa-inr'></i> 400</td>
							<td>1 kg</td>
							<td>40</td>
							<td><i class='fa fa-inr'></i> 16000</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image5</td>
							<td>123</td>
							<td>Badam</td>
							<td><i class='fa fa-inr'></i> 350</td>
							<td>500 gm</td>
							<td>8</td>
							<td><i class='fa fa-inr'></i> 2800</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image6</td>
							<td>123</td>
							<td>Paracetamol</td>
							<td><i class='fa fa-inr'></i> 30</td>
							<td>3 packet</td>
							<td>4</td>
							<td><i class='fa fa-inr'></i> 120</td>
							<td><a href='#'>Edit</a></td>
						</tr>
						<tr>
							<td>Image7</td>
							<td>123</td>
							<td>Harpic</td>
							<td><i class='fa fa-inr'></i> 90</td>
							<td>500 mL</td>
							<td>8</td>
							<td><i class='fa fa-inr'></i> 720</td>
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
				<div class='edit_add'>
					<a href='edit_sup_cart.php' style='background: #4caf50;'>Edit Cart</a>
					<a href='add_sup_cart.php' style='float: right; background: #2196f3;'>Add Cart</a>
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
