<!DOCTYPE>
<html>
<head>
	<title>Go Shopping</title>
	<meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1' />		
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>		
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
	
	<link rel='stylesheet' href='styles/style.css'>
	
</head>
<body>
<div id='top' class='grey_border'>
	<div class='border_line'></div>
	<div class='container'>		
		<div class='row'>
			<div class='col-md-5'>
				<ul class='nav nav_content'>
					<li class='nav-item'>INDIA</li>
					<li class='nav-item'>ENGLISH <i class='fa fa-caret-down'></i></li>
					<li class='nav-item drop_down'>			
						<i class='material-icons' style='font-size:12px;'>compare</i> COMPARE (0)
						<div class='drop_down_menu'>
							<a href='#'>Link 1</a>
							<a href='#'>Link 2</a>
							<a href='#'>Link 3</a>
						</div>
					</li>
				</ul>
			</div>
			<div class='col-md-7 topnavigation'>
				<a href='#'>WELCOME GUEST MSG!</a>
				<a href='#'>MY ACCOUNT</a>
				<a href='#'>DAILY DEALS</a>
				<a href='#'>MY WISHLISTS</a>
				<a href='#'>BLOG</a>
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
			<div class='col-md-4 col-12 '>
				<div class='row'>
					<div class='offset-md-2 col-md-8 offset-sm-2 col-sm-8 offset-2 col-8' style='font-size: 16px; margin-top:6px; color: #2196f3;'><i class='fa fa-phone'></i> (0542) 3201917 <span style='font-weight: bold; padding-left: 6px;'>Contact us </span></div>
					<div class='col-md-2 col-sm-2 col-2'> 
						<a href='cart.php'><i class='fa fa-shopping-basket' style='font-size:40px; color: #4CAF50;'></i></a>
					</div>					
				</div>
			</div>
		</div>
		<div class='topnav' id='myTopnav'>
			<a href='#' class='active'>Home</a>
			<a href='#'>Dry Fruits</a>
			<a href='#'>Spices</a>
			<a href='#'>Grocery</a>
			<a href='#'>Home Care</a>
			<a href='#'>Medicines</a>
			<a href='#' class='rightCat' data-toggle='tooltip' data-placement='top' title='Upto 25% Off'>Sale <i class='fa fa-caret-down'></i></a>
			
			<script>
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
			
			<a href='#' class='rightCat'>Features</a>
			<a href='javascript:void(0);' style='font-size:15px;' class='icon' onclick='myFunction()'>&#9776;</a>
		</div>
		
		<script>
			function myFunction() {
				var x = document.getElementById('myTopnav');
				if (x.className === 'topnav') {
					x.className += ' responsive';
				} else {
					x.className = 'topnav';
				}
			}
		</script>
	</div>
</div>

<div class='container' id='orders_head'>
	<div>All Orders</div>
	<hr/>
	<div>Previous Orders (8)</div>
</div>
<hr/>

<div class='container' id='orders'>
	<div class=''>
		
	</div>
</div>

<div class='container-fluid' style='background-color: #111; position: relative; padding-bottom: 35px;' id='footer'>
	<div class='container'>
	<div class='row'>
		<div id='lowerTri' class='col-md-2'>
			<div class='ribbon'>Ribbon Text</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-lg-3 col-md-6'>
			<h5>My Account</h5>
			<ul class='a'>
				<li style='margin-bottom: 8px;'><a href='#' ><i class='fa fa-caret-right' style='color: #00bb00;'></i> About us</a></li>
				<li style='margin-bottom: 8px;'><a href='#' ><i class='fa fa-caret-right' style='color: #00bb00;'></i> Contact us</a></li>
				<li style='margin-bottom: 8px;'><a href='#' ><i class='fa fa-caret-right' style='color: #00bb00;'></i> My account</a></li>
				<li style='margin-bottom: 8px;'><a href='#' ><i class='fa fa-caret-right' style='color: #00bb00;'></i> Orders history</a></li>
				<li style='margin-bottom: 8px;'><a href='#' ><i class='fa fa-caret-right' style='color: #00bb00;'></i> Advanced Search</a></li>
			</ul>
		</div>
		<div class='col-lg-3 col-md-6'>
			<h5>Contact Information</h5>
			<ul class='unord'>
				<li>
					<i class='material-icons footIcon'>location_on</i>
					<div class='footDiv'>
						<span class='headTitle'>Address: </span><br>
						<span>K-65/77 Kabir Chaura, Varanasi</span>
					</div>
				</li>
				<li>
					<i class='fa fa-phone footIcon'></i>
					<div class='footDiv'>
						<span class='headTitle'>Phone: </span><br>
						<span>(0542) 3201917</span>
					</div>
				</li>
				<li>
					<i class='material-icons footIcon'>mail_outline</i>
					<div class='footDiv'>
						<span class='headTitle'>Email: </span><br>
						<span>abhishek@2451gmail.com</span>
					</div>
				</li>
				<li>
					<i class='material-icons footIcon'>access_time</i>
					<div class='footDiv'>
						<span class='headTitle'>Service: </span><br>
						<span>10:00am-8:00pm | Mon-Sat</span>
					</div>
				</li>
			</ul>
		</div>
		<div class='col-lg-3 col-md-6'>
			<h5>Main Features</h5>
			<ul>
				<li><i class='material-icons' style='color: #00bb00'>check</i> Fast Delivery</li>
				<li><i class='material-icons' style='color: #00bb00'>check</i> Cash/Cashless Transaction</li>
				<li><i class='material-icons' style='color: #00bb00'>check</i> Lowest price Guaranty</li>
				<li><i class='material-icons' style='color: #00bb00'>check</i> One click purchase</li>
				<li><i class='material-icons' style='color: #00bb00'>check</i> Free Delivery for purchase over <i class='fa fa-inr' style='margin-left: 30px;'> 1000</i></li>
				<li></li>
			</ul>
		</div>
		<div class='col-lg-3 col-md-6' style='color: white;'>
			<h5>Be the First to Know</h5>
			<p style='margin-bottom: 35px;'>Get all the latest information on Events, Sales and Offers. Sign up for newsletter today. </p>
			<form method='post' class='subscribe' action='' enctype='multipart/form-data' >
				<label>Enter your email address: </label><br>
				<input type='email' placeholder='yourEmailId' class=''/>
				<button type='submit' name='subscribe' value='Subscribe'>Subscribe</button>
			</form>
		</div>
	</div>
	</div>
</div>
<div class='container-fluid' style='background-color: #000' id='foot'>	
	<div class='navbar navbar-fixed-bottom'>
		<div class='container'>
			<div class='col-md-6'>
				<div class='navbar-text pull-left'>
					<!-- # ke jgh facebook wale account ka url paste krna h. Same for all -->				
					<span>Company Name</span>
					<a href='#'><i class='fa fa-facebook'></i></a> 
					<a href='#'><i class='fa fa-twitter'></i></a>
					<a href='#'><i class='fa fa-google-plus'></i></a>
					<a href='#'><i class='fa fa-linkedin'></i></a>
					<a href='#'><i class='fa fa-instagram'></i></a>
				</div>
			</div>
			<div class='col-md-6'>
				<div class='navbar-text pull-right'>
					<p><i class='fa fa-copyright'></i> Copyright Programming Knowledge 2018</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>

</body>
</html>


