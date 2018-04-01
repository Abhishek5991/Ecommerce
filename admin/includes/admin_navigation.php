<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class='navbar-header'>
		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		</button>
		<span class='navbar-brand' style='color: #fff;' href='index.php'>Hunger Strike</span>
	</div>
	
	<!-- Top Menu Items -->
	<ul class='nav navbar-right top-nav'>
	
		<li class='dropdown'>
			<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
				<i class='fa fa-envelope'></i> <b class='caret'> </b>
			</a>
			<ul class='dropdown-menu message-dropdown'>
				<li class='message-preview'>
					<a href='#' >
						<div class='media'>
							<span class='pull-left'>
								<img class='media-object' src='http://placehold.it/50x50' alt=''>
							</span>
							<div class='media-body'>
								<h5 class='media-heading'>
									<strong>John Smith</strong>
								</h5>
								<p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class='message-preview'>
					<a href='#'>
						<div class='media'>
							<span class='pull-left'>
								<img class='media-object' src='http://placehold.it/50x50' alt=''>
							</span>
							<div class='media-body'>
								<h5 class='media-heading'>
									<strong>John Smith</strong>
								</h5>
								<p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class='message-preview'>
					<a href='#'>
						<div class='media'>
							<span class='pull-left'>
								<img class='media-object' src='http://placehold.it/50x50' alt=''>
							</span>
							<div class='media-body'>
								<h5 class='media-heading'>
									<strong>John Smith</strong>
								</h5>
								<p class='small text-muted'><i class='fa fa-clock-o'></i> Yesterday at 4:32 PM</p>
								<p>Lorem ipsum dolor sit amet, consectetur...</p>
							</div>
						</div>
					</a>
				</li>
				<li class='message-footer'>
					<a href='#'>Read All New Messages</a>
				</li>
			</ul>
		</li>
		
		<li class='dropdown'>
			<a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-bell'></i> <b class='caret'> </b></a>
			<ul class='dropdown-menu alert-dropdown'>
				<li>
					<a href='#'>Alert Name <span class='label label-default'>Alert Badge</span></a>
				</li>
				<li>
					<a href='#'>Alert Name <span class='label label-primary'>Alert Badge</span></a>
				</li>
				<li>
					<a href='#'>Alert Name <span class='label label-success'>Alert Badge</span></a>
				</li>
				<li>
					<a href='#'>Alert Name <span class='label label-info'>Alert Badge</span></a>
				</li>
				<li>
					<a href='#'>Alert Name <span class='label label-warning'>Alert Badge</span></a>
				</li>
				<li>
					<a href='#'>Alert Name <span class='label label-danger'>Alert Badge</span></a>
				</li>
				<li class='divider'></li>
				<li>
					<a href='#'>View All</a>
				</li>
			</ul>
		</li>
		<li class='dropdown'>
			<a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> John Smith <b class='caret'></b></a>
			<ul class='dropdown-menu'>
				<li>
					<a href='#'><i class='fa fa-fw fa-user'></i> Profile</a>
				</li>
				<li>
					<a href='#'><i class='fa fa-fw fa-envelope'></i> Inbox</a>
				</li>
				<li>
					<a href='#'><i class='fa fa-fw fa-gear'></i> Settings</a>
				</li>
				<li class='divider'></li>
				<li>
					<a href='#'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
				</li>
			</ul>
		</li>
	</ul>
	
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div id='sidebar_menu' class='collapse navbar-collapse navbar-ex1-collapse'>
		<ul class='nav navbar-nav side-nav'>
			<li class='side-nav-image'>
				<a href='index.php'>
					<img class='img img-responsive img-circle' style='width: 60px; height: 60px; margin-left: auto; margin-right: auto;' src='../images/DryFruits/pista/pista1.jpg' />	<br/>					
					<span>Abhishek Keshari</span><br/>
					<span>Shop Manager</span>						
				</a>
			</li>
			<li>
				<a href='index.html'>
					<i class='material-icons'>dashboard</i><br/>
					<span class='feat_title'>Dashboard</span>
				</a>
			</li>
			<li>
				<a>
					<i class='material-icons'>shopping_cart</i><br/>
					<span class='feat_title'>Products</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#prod_demo'>keyboard_arrow_right</span>
				</a>
				
				<ul id='prod_demo' class='collapse'>
					<li>
						<a href='includes/all_products.php'>All Products</a>
					</li>
					<li>
						<a href='includes/add_products.php'>Add Product(s)</a>
					</li>
					<li>
						<a href='includes/edit_products.php'>Edit Product(s)</a>
					</li>
				</ul>  						
				
			</li>
			<li>
				<a >
					<i class='fa fa-inr'></i><br/>
					<span class='feat_title'>Billing</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#bill_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='bill_demo' class='collapse'>
					<li>
						<a href='#'>All Invoices</a>
					</li>
					<li>
						<a href='#'>Add Invoice</a>
					</li>
					<li>
						<a href='#'>Edit Invoice</a>
					</li>
					<li>
						<a href='#'>View Invoice</a>
					</li>
				</ul>
			</li>
			<li>
				<a >
					<i class='material-icons'>group</i><br/>
					<span class='feat_title'>Customers</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#cust_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='cust_demo' class='collapse'>
					<li>
						<a href='#'>All Customers</a>
					</li>
					<li>
						<a href='#'>Add Customer</a>
					</li>
					<li>
						<a href='#'>Edit Customer</a>
					</li>
				</ul>
			</li>
			<li>
				<a >
					<i class='material-icons'>group_add</i><br/>
					<span class='feat_title'>Vendors</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#vend_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='vend_demo' class='collapse'>
					<li>
						<a href='#'>All Vendors</a>
					</li>
					<li>
						<a href='#'>Add Vendors</a>
					</li>
					<li>
						<a href='#'>Edit Vendors</a>
					</li>
				</ul>
			</li>
			<li>
				<a >
					<i class='material-icons'>shopping_basket</i><br/>
					<span class='feat_title'>Orders</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#ord_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='ord_demo' class='collapse'>
					<li>
						<a href='#'>All Orders</a>
					</li>
					<li>
						<a href='#'>Add Order</a>
					</li>
					<li>
						<a href='#'>Edit Order</a>
					</li>
				</ul>
			</li>
			<li>
				<a >
					<i class='material-icons'>group</i><br/>
					<span class='feat_title'>Users</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#user_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='user_demo' class='collapse'>
					<li>
						<a href='#'>All Users</a>
					</li>
					<li>
						<a href='#'>Add Users</a>
					</li>
					<li>
						<a href='#'>Edit Users</a>
					</li>
				</ul>
			</li>
			<li>
				<a >
					<i class='fa fa-envelope'></i><br/>
					<span class='feat_title'>Messaging</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#msg_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='msg_demo' class='collapse'>
					<li>
						<a href='#'>Dropdown Item</a>
					</li>
					<li>
						<a href='#'>Dropdown Item</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class='fa fa-bar-chart-o'></i><br/>
					<span class='feat_title'>Reports</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#rep_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='rep_demo' class='collapse'>
					<li>
						<a href='#'>Site</a>
					</li>
					<li>
						<a href='#'>Visitors</a>
					</li>
					<li>
						<a href='#'>Statistics</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class='material-icons'>device_hub</i><br/>
					<span class='feat_title'>Product Categories</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#p_cat_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='p_cat_demo' class='collapse'>
					<li>
						<a href='#'>All Categories</a>
					</li>
					<li>
						<a href='#'>Add Categories</a>
					</li>
					<li>
						<a href='#'>Edit Categories</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class='fa fa-tags'></i><br/>
					<span class='feat_title'>Product Tags</span>
					<span class='arrow material-icons' data-toggle='collapse' data-target='#tag_demo'>keyboard_arrow_right</span>
				</a>
				<ul id='tag_demo' class='collapse'>
					<li>
						<a href='#'>All Product Tags</a>
					</li>
					<li>
						<a href='#'>Add Product Tag</a>
					</li>
					<li>
						<a href='#'>Edit Product Tag</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class='material-icons'>settings</i><br/>
					<span class='feat_title'>Settings</span>
				</a>
			</li>
			
		   
			
			<li>
				<a href='#' data-toggle='collapse' data-target='#demo'><i class='fa fa-arrows-v'></i> Dropdown <i class='fa fa-caret-down'></i></a>
				<ul id='demo' class='collapse'>
					<li>
						<a href='#'>Dropdown Item</a>
					</li>
					<li>
						<a href='#'>Dropdown Item</a>
					</li>
				</ul>
			</li>
			<li >  <!-- class='active' -->
				<a href='blank-page.html'><i class='fa fa-file'></i> Blank Page</a>
			</li>
			<li>
				<a href='index-rtl.html'><i class='fa fa-dashboard'></i> RTL Dashboard</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>