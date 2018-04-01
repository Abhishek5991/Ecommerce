<?php
	include('includes/head.php');
?>

<div class='' id='register'>	
	<div class='container'>	
		<div>
		<ul class='row'>
			<li><a href='#login'>Login</a></li>
			<li><a href='#signup'>Signup</a></li>
		</ul>
		</div>
	</div>	
	
	<div class='container' id='login' >
		<div class='row loginIcon' style='margin-bottom: 35px;'>
			<div class='offset-sm-3 col-sm-3' style='background-color: rgb(59, 89, 152); color: white;'>
				<i class='fa fa-facebook'></i> Login with Facebook 
			</div>
			<div class='col-sm-3' style='background-color: rgb(211, 72, 54); color: white;'>
				<i class='fa fa-google-plus'></i> Login with Google +
			</div>
		</div>
		
		<form action='#' method='post' enctype='multipart/form-data'>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Email </label>
				<div class='col-sm-8'>
					<input type='email' placeholder='Enter email' /> 
				</div>
			</div>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Password </label>
				<div class='col-sm-8'>
					<input type='password' placeholder='Enter Password' /> 
				</div>
			</div>
			<div class='row' style='margin-top: 35px;'>				
				<div class='offset-sm-4 col-sm-3'>
					<input type='submit' name='submit' value='Login' /> 
				</div>
			</div>
			
			<div class='row forget'>
				<div class='offset-sm-1 col-sm-5'>
					<span>Create <a href='#'>New Account</a></span>
				</div>
				<div class='offset-sm-2 col-sm-3'>
					<span>Forget <a href='#'>Password</a></span>
				</div>
			</div>
		</form>
	</div>
	
	<div class='container' id='signup' style='display: none;'>
		<div class='row loginIcon' style='margin-bottom: 35px;'>
			<div class='offset-sm-3 col-sm-3' style='background-color: rgb(59, 89, 152); color: white;'>
				<i class='fa fa-facebook'></i> Signup with Facebook 
			</div>
			<div class='col-sm-3' style='background-color: rgb(211, 72, 54); color: white;'>
				<i class='fa fa-google-plus'></i> Signup with Google+
			</div>
		</div>
	
		<form action='#' method='post' enctype='multipart/form-data'>			
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Username </label>
				<div class='col-sm-8'>
					<input type='text' placeholder='Enter username' /> 
				</div>
			</div>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Mobile No. </label>
				<div class='col-sm-8'>
					<input type='text' placeholder='Enter Mobile No.' /> 
				</div>
			</div>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Email </label>
				<div class='col-sm-8'>
					<input type='email' placeholder='Enter email' /> 
				</div>
			</div>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Password </label>
				<div class='col-sm-8'>
					<input type='password' placeholder='Enter Password' /> 
				</div>
			</div>
			<div class='row'>
				<label class='offset-sm-1 col-sm-2'>Confirm password </label>
				<div class='col-sm-8'>
					<input type='password' placeholder='Re-Enter password' /> 
				</div>
			</div>
			<div class='row'>				
				<div class='offset-sm-4 col-sm-3'>
					<input type='submit' name='submit' value='Register' /> 
				</div>
			</div>
		</form>
	</div>
	
</div>

<?php
	include('includes/foot.php');
?>