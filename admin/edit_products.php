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

	<div class='container'>

		<!-- Page Heading -->
		<div class='row heading_page'>
			<div class='col-md-1'></div>
			<div class='col-md-12'> Edit Products </div>
			<div class='col-md-11 all_p_search'>
				<i class='fa fa-search'></i>
				<input type='search' size='30' name='search' placeholder='Search Products' />
			</div>
		</div>
	
		<div class='row edit_product_form'>
			<form class='col-md-12 row' action='' method='post' enctype='multipart/form-data' >
				<div class='col-md-6 form-group'>
					<label for='prod_name'>Product Name:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='cat'>Product Category:</label>
					<select class='form-control'>
						<option value='0'>Select Option</option>
						<option value='1'>Dry Fruits</option>
						<option value='2'>Spices</option>
						<option value='3'>Groceries</option>
						<option value='4'>Home Care</option>
						<option value='5'>Medicines</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='cat'>Product Weight Value:</label>
					<select class='form-control'>
						<option value='0'>25</option>
						<option value='1'>10</option>
						<option value='2'>5</option>
						<option value='3'>1</option>
						<option value='4'>500</option>
						<option value='5'>250</option>
						<option value='6'>200</option>
						<option value='7'>100</option>
						<option value='8'>50</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='cat'>Product Unit Weight:</label>
					<select class='form-control'>
						<option value='0'>kg</option>
						<option value='1'>gm</option>
						<option value='2'>L</option>
						<option value='3'>mL</option>
						<option value='4'>packet</option>
						<option value='5'>pieces</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_cp'>Cost Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_sellp'>Selling Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_salep'>Sale Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_wp'>Wholesale Price:</label>
					<input type='text' class='form-control'>
				</div>						
				<div class='col-md-6 form-group'>
					<label for='prod_combop'>Combo Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_combo_id'>Combo Id:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-4 form-group'>
					<label for='prod_image1'>Image 1:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='prod_image2'>Image 2:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='prod_image3'>Image 3:</label>
					<input type='file' class='form-control'>
				</div>
				
				<div class='col-md-12 form-group'>
					<label for='short_desc'>Short Description</label>
					<textarea type='text' rows='10' name='short_desc'> </textarea>
				</div>
				<div class='col-md-12 form-group'>
					<label for='desc'>Description</label>
					<textarea type='text' rows='10' name='desc'> </textarea>
				</div>
				<div class='col-md-12 form-group'>
					<label for='how_to_use'>How To Use</label>
					<textarea type='text' rows='10' name='how_to_use'> </textarea>
				</div>
				<div class='col-md-12 form-group'>
					<label for='medical_use'>Medical Use</label>
					<textarea type='text' rows='10' name='medical_use'> </textarea>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='tag'>Product Tag:</label>
					<select class='form-control'>
						<option value='0'>Demanding</option>
						<option value='1'>Less</option>
						<option value='2'>Normal</option>
						<option value='3'>High</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='return'>Product Return Policy:</label>
					<select class='form-control'>
						<option value='0'>Not Applicable</option>
						<option value='1'>Applicable</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_brand'>Product Brand:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_stock'>Product Stock:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_sku'>Product SKU:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_tax'>Product Tax:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_supplier_id'>Supplier Id:</label>
					<input type='text' class='form-control'>
				</div>

				<div class='col-md-6 edit_prod_btn'>
					<button type='submit' class='save_btn' >Update</button>
					<button type='submit' class='cancel_btn' >Cancel</button>
				</div>
				
			</form>
		</div>
		
		<div class='row edit_sub_product_form'>
			<form class='col-md-12 row' action='' method='post' enctype='multipart/form-data' >
				<div class='col-md-12 row sub-heading_page'>							
					<div class='col-md-12'> Edit Sub-Products </div>
					<div class='col-md-1'></div>
					<div class='clearfix visible-xs'></div>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_name'>Parent Product Id:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-3 form-group'>
					<label for='cat'>Product Weight Value:</label>
					<select class='form-control'>
						<option value='0'>25</option>
						<option value='1'>10</option>
						<option value='2'>5</option>
						<option value='3'>1</option>
						<option value='4'>500</option>
						<option value='5'>250</option>
						<option value='6'>200</option>
						<option value='7'>100</option>
						<option value='8'>50</option>
					</select>
				</div>
				<div class='col-md-3 form-group'>
					<label for='cat'>Product Unit Weight:</label>
					<select class='form-control'>
						<option value='0'>kg</option>
						<option value='1'>gm</option>
						<option value='2'>L</option>
						<option value='3'>mL</option>
						<option value='4'>packet</option>
						<option value='5'>pieces</option>
					</select>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='prod_cp'>Cost Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_sellp'>Selling Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_salep'>Sale Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_wp'>Wholesale Price:</label>
					<input type='text' class='form-control'>
				</div>						
				<div class='col-md-6 form-group'>
					<label for='prod_combop'>Combo Price:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_combo_id'>Combo Id:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-4 form-group'>
					<label for='prod_image1'>Image 1:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='prod_image2'>Image 2:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='prod_image3'>Image 3:</label>
					<input type='file' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='tag'>Product Tag:</label>
					<select class='form-control'>
						<option value='0'>Demanding</option>
						<option value='1'>Less</option>
						<option value='2'>Normal</option>
						<option value='3'>High</option>
					</select>
				</div>						
				<div class='col-md-6 form-group'>
					<label for='prod_brand'>Product Brand:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_stock'>Product Stock:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='prod_sku'>Product SKU:</label>
					<input type='text' class='form-control'>
				</div>

				<div class='col-md-12 edit_sub_prod_btn'>
					<button type='submit' class='save_btn' >Update</button>
					<button type='submit' class='cancel_btn' >Cancel</button>
					<button type='submit' class='add_btn' >Update More <i style='padding-left: 5px;' class='fa fa-plus'> </i></button>
				</div>
				
			</form>
		</div>
		
	</div>
<!-- /.container-fluid -->

</div>

</div>
    <!-- /#wrapper -->  
				

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

</body>

</html>
