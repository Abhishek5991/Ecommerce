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
			<div class='col-md-12'> All Products </div>
			<div class='col-md-11 all_p_search'>
				<i class='fa fa-search'></i>
				<input type='search' size='30' name='search' placeholder='Search Products' />
			</div>
		</div>
	
		<div class='row all_p_page'>
			<div class='all_p_pagi col-md-offset-7 col-md-5'>
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
	
	<div class='container'>		
		<div class='all_p_main'>
			<ul class='all_p_sidenav'>
				<li><a href='#all_products' class='active'>All Products</a></li>
				<li><a href='#dry_fruits'>Dry Fruits</a></li>
				<li><a href='#spices'>Spices</a></li>
				<li><a href='#grocery'>Grocery</a></li>
				<li><a href='#home_care'>Home Care</a></li>
				<li><a href='#medical'>Medical</a></li>
			</ul>
			
			<div class='all_p_white'>
				<div class='container-fluid'>
					<div class='row all_p_all_products'>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>										
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/kaju/kaju1.jpg' alt='Kaju'>
								<div>
									<center>
										<h5>Special Kaju</h5>
										<h4><i class='fa fa-inr'></i> 900 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/kismis/kismis1.jpg' alt='Kismis'>
								<div>
									<center>
										<h5>Chaman Kismis</h5>
										<h4><i class='fa fa-inr'></i> 400 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/badam/badam1.jpg' alt='Badam'>
								<div>
									<center>
										<h5>California Almond</h5>
										<h4><i class='fa fa-inr'></i> 760 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot'>
								<div>
									<center>
										<h5>Kashmiri Akhrot</h5>
										<h4><i class='fa fa-inr'></i> 1200 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>										
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/makhana/makhana1.jpg' alt='Makhana'>
								<div>
									<center>
										<h5>Rasgulla Makhana</h5>
										<h4><i class='fa fa-inr'></i> 720 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/chohara/chohara1.jpg' alt='Chohara'>
								<div>
									<center>
										<h5>Chohara</h5>
										<h4><i class='fa fa-inr'></i> 180 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/DryFruits/pista/pista1.jpg' alt='Pista'>
								<div>
									<center>
										<h5>Pista</h5>
										<h4><i class='fa fa-inr'></i> 1600 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/Spices/dhaniya/dhaniya1.jpg' alt='Dhania'>
								<div>
									<center>
										<h5>Dhania</h5>
										<h4><i class='fa fa-inr'></i> 180 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>										
								<img class='img-responsive img-thumbnail' src='../images/Spices/haldi/haldi1.jpg' alt='Haldi'>
								<div>
									<center>
										<h5>Haldi</h5>
										<h4><i class='fa fa-inr'></i> 200 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/Spices/mircha/mircha1.jpg' alt='Mircha'>
								<div>
									<center>
										<h5>Mircha</h5>
										<h4><i class='fa fa-inr'></i> 160 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/Spices/jeera/jeera1.jpg' alt='Jeera'>
								<div>
									<center>
										<h5>Jeera</h5>
										<h4><i class='fa fa-inr'></i> 260 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div>
						<div class='all_p_prod_item'>
							<a href='edit_product.php'>
								<img class='img-responsive img-thumbnail' src='../images/Spices/kalimirch/kalimirch1.jpg' alt='Kalimirch'>
								<div>
									<center>
										<h5>Kalimirch</h5>
										<h4><i class='fa fa-inr'></i> 900 / <small>kg </small> </h4>
									</center>
								</div>
							</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
		
		<div class='row all_p_page'>
			<div class='all_p_pagi col-md-offset-7 col-md-5'>
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
<!-- /.container-fluid -->

</div>

</div>
    <!-- /#wrapper -->  
				

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

</body>

</html>
