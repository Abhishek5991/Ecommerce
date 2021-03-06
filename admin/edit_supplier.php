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
			<div class='col-md-12'> Edit Supplier </div>
		</div>
		
		<div class='row edit_sup_form'>
			<form class='col-md-12 row' action='' method='post' enctype='multipart/form-data' >
				<div class='col-md-6 form-group'>
					<label for='sup_uname'>Username:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_fname'>Firstname:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_lname'>Lastname:</label>
					<input type='text' class='form-control'>
				</div>				
				<div class='col-md-6 form-group'>
					<label for='sup_cat'>Category:</label>
					<select class='form-control'>
						<option value='0'>Dry Fruits</option>
						<option value='1'>Spices</option>
						<option value='2'>Groceries</option>
						<option value='1'>Home Care</option>
						<option value='2'>Medical</option>
					</select>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_comp_name'>Company Name:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_email'>Email:</label>
					<input type='email' class='form-control'>
				</div>				
				
				<div class='col-md-6 form-group'>
					<label for='sup_mob'>Mobile No.:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_alt_mob'>Alternate Mobile No.:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_addr'>Default Address:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_ip_addr'>IP Address:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-4 form-group'>
					<label for='sup_image1'>Image 1:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='sup_image2'>Image 2:</label>
					<input type='file' class='form-control'>
				</div>
				<div class='col-md-4 form-group'>
					<label for='sup_image3'>Image 3:</label>
					<input type='file' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_tin_num'>TIN No.:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_gst_num'>GST No.:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_tag'>Bank Name:</label>
					<select class='form-control' name='sup_tag'>
						<option value='0'>ICICI</option>
						<option value='1'>HDFC</option>
						<option value='2'>PNB</option>
						<option value='3'>Bank Of India</option>
						<option value='4'>Union Bank</option>
						<option value='4'>State Bank Of India</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_account_num'>Account No.:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_pay_mode'>Payment Mode:</label>
					<select class='form-control' name='sup_pay_mode'>
						<option value='0'>Cash </option>
						<option value='1'>Demand Draft </option>
						<option value='2'>Credit / Debit Card</option>
						<option value='3'>Net Banking</option>
						<option value='4'>PayTM </option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_tag'>Tag:</label>
					<select class='form-control' name='sup_tag'>
						<option value='0'>On time Supplier </option>
						<option value='1'>Late Supplier </option>
					</select>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_month_purchase'>Monthly Purchase:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_month_payment'>Monthly Payment:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_doj'>Join Date:</label>
					<input type='date' class='form-control'>
				</div>
				
				<div class='col-md-6 edit_sup_btn'>
					<button type='submit' class='save_btn'>Edit</button>
					<button type='submit' class='cancel_btn'>Cancel</button>
				</div>
				
			</form>
		</div>
		
		<div class='row edit_sup_address_form'>
			<form class='col-md-12 row' action='' method='post' enctype='multipart/form-data' >
				<div class='col-md-12 row sub-heading_page'>							
					<div class='col-md-12'> Address </div>
					<div class='col-md-1'></div>
					<div class='clearfix visible-xs'></div>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='user_id'>User Id:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='tag'>User Tag:</label>
					<select class='form-control'>
						<option value='0'>Customer</option>
						<option value='1'>Supplier</option>
						<option value='2'>Employee</option>
						<option value='3'>Wholesaler</option>
					</select>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_uname'>Username:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_fname'>Firstname:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_lname'>Lastname:</label>
					<input type='text' class='form-control'>
				</div>				
				<div class='col-md-6 form-group'>
					<label for='sup_email'>Email:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='sup_mob'>Mobile No.:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='sup_alt_mob'>Alternate Mobile No.:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='block'>Block:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='locality'>Locality:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='landmark'>Landmark:</label>
					<input type='text' class='form-control'>
				</div>
				<div class='col-md-6 form-group'>
					<label for='pincode'>Pincode:</label>
					<input type='text' class='form-control'>
				</div>
				
				<div class='col-md-6 form-group'>
					<label for='city'>City:</label>
					<select class='form-control'>
						<option value='0'>Varanasi</option>
						<option value='1'>Mughal Sarai</option>
						<option value='2'>Allahabad</option>
					</select>
				</div>
				<div class='col-md-6 form-group'>
					<label for='state'>State:</label>
					<select class='form-control'>
						<option value='0'>Uttar Pradesh</option>
						<option value='1'>Bihar</option>
					</select>
				</div>				
				
				<div class='col-md-12 edit_sup_address_btn'>
					<button type='submit' class='save_btn' >Save</button>
					<button type='submit' class='cancel_btn' >Cancel</button>
					<button type='submit' class='add_btn' >Edit More <i style='padding-left: 5px;' class='fa fa-plus'> </i></button>
				</div>
				
			</form>
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
