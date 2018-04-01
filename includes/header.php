<!DOCTYPE>
<html>
<head>
	<title>Go Shopping</title>
	<meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1' />		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type='text/css'>		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="styles/style.css">
	
</head>
<body>
<div id='top' class='grey_border'>
	<div class='border_line'></div>
	<div class='container'>		
		<div class='row'>
			<div class='col-md-9'>
				<ul class='nav nav_content'>
					<li class='nav-item'>INDIA</li>	
					<li class='nav-item'><a href='#'>WELCOME Abhishek ..!!</a></li>
				</ul>
			</div>
			<div class='col-md-3 topnavigation'>				
				<a href='#'>MY ACCOUNT</a>
				<a href='#'>MY WISHLISTS</a>
				<a href='#'>LOGIN</a>
			</div>
		</div>
	</div>
</div>

<div id='block'>
	<div class='container'>		
		<div class='row '>
			<div class='col-md-3 col-12'><center style='font-size: 30px;'>Company Name</center></div>
			<div class='col-md-5 col-12'>
				<form class='form-wrapper-2'>
				<div class='row'>
					<input class='col-md-9 col-sm-9 col-9' type='text' placeholder='Search here...' required>
					<button class='col-md-3 col-sm-3 col-3' type='submit'><i class='fa fa-search'></i> Search</button>
				</div>
				</form>
			</div>
			<div class='col-md-4 col-12'>
				<div class='row contact'>
					<span class='offset-1 col-6' style='font-size: 16px; padding-top: 5px;'><i class='fa fa-phone'></i> (0542) 3201917 </span>					
				
					<span class='col-2' style='font-size: 40px; color: #4caf50;'><i class='fa fa-shopping-basket'></i></span>
					
					<span class='offset-1 col-1 my_pro' style='font-size: 20px; color: #4caf50; max-width: 45px; height: 45px; border-radius: 50%; background: f1f1f1;'>
						<i class='material-icons' style='padding: 9px 0px; margin-left: -4px;'>person</i>
						<div class='my_profile'>
							<a href='#'><i class='fa fa-edit' style='color: #999;'></i> Edit profile</a>
							<a href='#'><i class='fa fa-credit-card' style='color: #2196f3;'></i> Wallet</a>
							<a href='#'><i class='fa fa-heart' style='color: red;'></i> Wishlist </a>						
							<a href='pre_orders.php'><i class='fa fa-shopping-basket' style='color: #4caf50;'></i> Previous Orders </a>
							<a href='#'><i class='fa fa-user' style='color: #2196f3;'></i> Signout</a>
						</div>
					</span>
				</div>
			</div>
		</div>
		<div class='topnav' id='myTopnav'>
			<a href='index.php' class='active'>Home</a>
			<a href='category.php'>Dry Fruits</a>
			<a href='category.php'>Spices</a>
			<a href='category.php'>Groceries</a>
			<a href='category.php'>Home Care</a>
			<a href='category.php'>Medicines</a>
			<a href='category.php' class='rightCat' data-toggle='tooltip' data-placement='top' title='Upto 25% Off'>Sale <i class='fa fa-caret-down'></i></a>
			
			<script>
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
			
			<a href='category.php' class='rightCat'>Features</a>
			<a href='javascript:void(0);' style='font-size:15px;' class='icon' onclick='myFunction()'>&#9776;</a>
		</div>
		
		<script>
			function myFunction() {
				var x = document.getElementById('myTopnav');
				if (x.className === 'topnav') {
					x.className += ' response';
				} else {
					x.className = 'topnav';
				}
			}
		</script>
	</div>
</div>