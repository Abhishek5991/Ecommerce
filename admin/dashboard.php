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
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js'></script>
	
</head>

<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('admin_navigation.php'); ?>

<div id='page-wrapper'>

	<div class='container-fluid'>

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-4">
								<i class="fa fa-user fa-5x"></i>
							</div>
							<div class="col-xs-8 text-right">
		
<?php
	/*
	$query = "SELECT * FROM posts";
	$select_post_query = mysqli_query($connection, $query);                         
	$posts_count = mysqli_num_rows($select_post_query);   
	*/
?>          
			

								<div class='huge'>100 <?php /* echo $posts_count;  */ ?></div>
								<div>Daily Visitor</div>
							</div>
						</div>
					</div>
					<a href="posts.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>                        
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-users fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
<?php
	/*
	$query = "SELECT * FROM users";
	$select_users_query = mysqli_query($connection, $query); 
	$users_count = mysqli_num_rows($select_users_query);   
	*/
?>                                 
							<div class='huge'>20 <?php /* echo $users_count; */?></div>
								<div> New Customer</div>
							</div>
						</div>
					</div>
					<a href="users.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-shopping-cart fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
<?php
	/*
	$query = "SELECT * FROM categories";
	$select_categories_query = mysqli_query($connection, $query); 
	$categories_count = mysqli_num_rows($select_categories_query);   
	*/
?>
								<div class='huge'>35 <?php /* echo $categories_count; */ ?></div>
								 <div>Today's Order</div>
							</div>
						</div>
					</div>
					<a href="categories.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-list-ul fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
<?php
	/*
	$query = "SELECT * FROM comment";
	$select_comment_query = mysqli_query($connection, $query); 
	$comments_count = mysqli_num_rows($select_comment_query);  
	*/
?>                                
							 <div class='huge'> 15<?php /* echo $comments_count; */ ?></div>
							  <div>Pending Order</div>
							</div>
						</div>
					</div>
					<a href="comments.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- /.row -->
		
		<div class='row' style='display: flex; flex-wrap: wrap;'>
		
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Orders </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>				
				<canvas id="myLineChart" ></canvas>
				<center><h5>Order Details</h5></center>
			</div>
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Business Stats </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>
				<canvas id="myBarChart" ></canvas>
				<center><h5>Business Statics</h5></center>
			</div>
			
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Customer </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>
				<canvas id="myBarChart2" ></canvas>
				<center><h5>Customer Increment</h5></center>
			</div>
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Category Stats </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>
				<canvas id="myBarChart3" ></canvas>
				<center><h5>Categorywise Revenue</h5></center>
			</div>
		
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Growth </span>
				</div>	
				<canvas id="myRadarChart" style='margin-bottom: 35px;'></canvas>
				<center><h5>Growth in different Cities</h5></center>
			</div>
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Category Info</span>
				</div>	
				<canvas id="mypolarAreaChart" ></canvas><br>
				<center><h5>Categorywise Revenue</h5></center>
			</div>
		
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Orders </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>	
				<canvas id="myPieChart" ></canvas>
				<center><h5>My Pie Chart</h5></center>
			</div>
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Orders </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>	
				<canvas id="myDoughnutChart" ></canvas>
				<center><h5>My Doughnut Chart</h5></center>
			</div>
		
			<div class='chart'>
				<div class='chart_info'>
					<span class='chart_title'>Orders </span>
					<span class='weekly'>
						<button>Weekly</button>
						<button>Monthly</button>
					</span>
				</div>	
				<canvas id="mylineChart" ></canvas>
				<center><h5>My Log Chart</h5></center>
			</div>
			
			
		</div>
<script>
var ctx1 = document.getElementById("myLineChart"); 
var myLineChart = new Chart(ctx1, {
	type: 'line',
	data: {
		labels: ["27-03", "28-03", "29-03", "30-03", "31-03", "01-04", "02-04"],
		datasets: [
		{
			label: "Last Year Order",
			fill: false,
			lineTension: 0.1,
			backgroundColor: "rgba(75, 192, 192, 0.4)",
			borderColor: "rgba(75, 192, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderJoinStyle: "miter",
			pointBorderColor: "rgba(75, 192, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 192, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [65, 59, 80, 81, 56, 55, 40],
		}, 
		{
			label: "Current Order",
			fill: false,			// Make it true to make it area chart
			lineTension: 0.1,		// it will make point in curve not like sharp edge
			backgroundColor: "rgba(75, 75, 192, 0.4)",
			borderColor: "rgba(75, 72, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(75, 72, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 72, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [100, 20, 60, 20, 80, 55, 90],
		}
		
		]
	},
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}// , stacked: true /* This is done for stacking I this 2nd one is stacked above the 1st one Remove this and see the o/p  */
			}]
		}
	}
});



var ctx1 = document.getElementById("myBarChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var myBarChart = new Chart(ctx1, {
	type: 'bar',
	data: {
		labels: ["27-03", "28-03", "29-03", "30-03", "31-03", "01-04", "02-04"],
		datasets: [
		{
			label: "Total Cost",
			fill: true,
			lineTension: 0.1,
			backgroundColor: "rgba(75, 192, 192, 0.4)",
			borderColor: "rgba(75, 192, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderJoinStyle: "miter",
			pointBorderColor: "rgba(75, 192, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 192, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 3,
			pointHitRadius: 10,
			data: [65, 59, 80, 81, 56, 55, 40],
		}, 
		{
			label: "Total Sale",
			fill: true,
			lineTension: 0.5,
			backgroundColor: "rgba(75, 75, 192, 0.4)",
			borderColor: "rgba(75, 72, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(75, 72, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 72, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [100, 40, 60, 20, 80, 55, 90],
		}, 
		{
			label: "Total Profit",
			fill: true,
			lineTension: 0.5,
			backgroundColor: "rgba(247, 190, 15, 0.4)",
			borderColor: "rgba(247, 190, 15, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(247, 190, 15, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(247, 190, 15, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [37, 19, 30, 45, 73, 25, 69],
		}
		
		]
	}
});

var ctx1 = document.getElementById("myBarChart2"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var myBarChart2 = new Chart(ctx1, {
	type: 'bar',
	data: {
		labels: ["27-03", "28-03", "29-03", "30-03", "31-03", "01-04", "02-04"],
		datasets: [
		{
			label: "New Customer",
			fill: true,
			lineTension: 0.1,
			backgroundColor: "rgba(75, 192, 192, 0.4)",
			borderColor: "rgba(75, 192, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderJoinStyle: "miter",
			pointBorderColor: "rgba(75, 192, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 192, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 3,
			pointHitRadius: 10,
			data: [20, 18, 10, 31, 26, 38, 52],
		}, 
		{
			label: "All Customer",
			fill: true,
			lineTension: 0.5,
			backgroundColor: "rgba(247, 190, 15, 0.4)",
			borderColor: "rgba(247, 190, 15, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(247, 190, 15, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(247, 190, 15, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [37, 72, 82, 113, 139, 177, 213],
		}
		
		]
	}
});

var ctx1 = document.getElementById("myBarChart3"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var myBarChart3 = new Chart(ctx1, {
	type: 'bar',
	data: {
		labels: ["27-03", "28-03", "29-03", "30-03", "31-03", "01-04", "02-04"],
		datasets: [
		{
			label: "Total Cost",
			fill: true,
			lineTension: 0.1,
			backgroundColor: "rgba(75, 192, 192, 0.4)",
			borderColor: "rgba(75, 192, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderJoinStyle: "miter",
			pointBorderColor: "rgba(75, 192, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 192, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 3,
			pointHitRadius: 10,
			data: [65, 59, 80, 81, 56, 55, 40],
		}, 
		{
			label: "Total Sale",
			fill: true,
			lineTension: 0.5,
			backgroundColor: "rgba(75, 75, 192, 0.4)",
			borderColor: "rgba(75, 72, 192, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(75, 72, 192, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(75, 72, 192, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [100, 40, 60, 20, 80, 55, 90],
		}, 
		{
			label: "Total Profit",
			fill: true,
			lineTension: 0.5,
			backgroundColor: "rgba(247, 190, 15, 0.4)",
			borderColor: "rgba(247, 190, 15, 1)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderStyle: "miter",
			pointBorderColor: "rgba(247, 190, 15, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(247, 190, 15, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 1,
			pointHitRadius: 10,
			data: [37, 19, 30, 45, 73, 25, 69],
		}
		
		]
	}
});

var ctx1 = document.getElementById("myRadarChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var myBarChart = new Chart(ctx1, {
	type: 'radar',
	data: {
		labels: ["Bangalore", "Chennai", "Mumbai", "Hyderabad", "Delhi", "Kolkata", "Indore"],
		datasets: [
		{
			label: "Reputaion",
			fill: true,
			lineTension: 0.1, 
			backgroundColor: "rgba(247, 190, 15, 0.4)",
			borderColor: "rgba(247, 190, 15, 0.4)",
			borderCapStyle: "butt",
			borderDash: [],
			borderDashOffset: 0.0,
			borderJoinStyle: "miter",
			pointBorderColor: "rgba(247, 190, 15, 1)",
			pointBackgroundColor: "#fff",
			pointBorderWidth: 1,
			pointHoverRadius: 5,
			pointHoverBackgroundColor: "rgba(247, 190, 15, 1)",
			pointHoverBorderColor: "rgba(200, 200, 200, 1)",
			pointHoverBorderWidth: 2,
			pointRadius: 3,
			pointHitRadius: 10,
			data: [65, 35, 90, 73, 30, 75, 40],
		}		
		]
	}
});


var ctx1 = document.getElementById("mypolarAreaChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var mypolarChart = new Chart(ctx1, {
	type: 'polarArea',
	data: {
		labels: ["Dry Fruits", "Spices", "Grocery", "Home Care", "Medicies"],
		datasets: [ {
			label: "My First Dataset",
			fill: true,
			backgroundColor: ['#f1c40f', '#e67e22', '#16a085', '#2980b9', '#8e44ad'],
			data: [65, 59, 70, 81, 56],
			}
		],
	},
	options: {
			animation: {
				// animateRotate: false,  // Used for stopping rotation
				animateScale: false	   // Used for rotation but with fixed size
			}
		}
});

var ctx1 = document.getElementById("myPieChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var pie = new Chart(ctx1, {
	type: 'pie',
	data: {
		labels: ["Red", "Blue", "Yellow", "Green", "Purple"],
		datasets: [ {
			label: "My First Dataset",
			fill: true,
			backgroundColor: ['#f1c40f', '#e67e22', '#16a085', '#2980b9', '#8e44ad'],
			data: [65, 59, 70, 81, 56],
			}
		],
	},
	options: {
		// cutoutPercentage: 50,  // Uncomment this then it will behave as doughnut chart
		rotation: Math.PI * .5,
		animation: {
			animateScale: true
		}
	}
});

var ctx1 = document.getElementById("myDoughnutChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var myDoughnutChart = new Chart(ctx1, {
	type: 'doughnut',
	data: {
		labels: ["Red", "Blue", "Yellow", "Green", "Purple"],
		datasets: [ {
			label: "My First Dataset",
			fill: true,
			backgroundColor: ['#f1c40f', '#e67e22', '#16a085', '#2980b9', '#8e44ad'],
			data: [65, 59, 70, 81, 56],
			}
		],
	},
	options: {
			animation: {
				// animateRotate: false,  // Used for stopping rotation
				animateScale: false	   // Used for rotation but with fixed size
			}
		}
});


var ctx1 = document.getElementById("mylineChart"); 
Chart.defaults.scale.ticks.beginAtZero = true;  
var pie = new Chart(ctx1, {
	type: 'line',
	data: {
		labels: ["Red", "Blue", "Yellow", "Green", "Purple"],
		datasets: [ {
			label: "My First Dataset",
			borderColor: '#f1c40f',
			data: [65, 59, 70, 81, 56],
			}
		],
	},
	options: {		
		scales: {
			yAxes: [{
				type: 'logarithmic'  /*,
				ticks: {
					min: 1,
					max: 60
				} */
			}]
		}
	}
});



</script>
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
