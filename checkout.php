<?php
	include('includes/head.php');
?>

<div class='container-fluid' id='check_move'>
	<div class='row'>
		<div class='col-sm-3'>
			<center style='font-size: 30px;'>Company Name</center>
		</div>
		<ul class='offset-sm-1 col-sm-8'>
			<li class='box' style='left: 0;'> 
				<i class='material-icons'>local_shipping</i>
				<span><i class='material-icons'>person</i></span>
			</li>
			<li class='line' style='left: 60px;'></li>
			<li class='box' style='left: 210px;'> 
				<i class='material-icons'>local_shipping</i>
				<span><i class='material-icons'>location_on</i></span> 
			</li>
			<li class='line' style='left: 270px;'></li>
			<li class='box' style='left: 420px;'> 
				<i class='material-icons'>local_shipping</i>
				<span><i class='material-icons'>local_grocery_store</i></span> 
			</li>
			<li class='line' style='left: 480px;'></li>			
			<li class='box' style='left: 630px;'> 
				<i class='material-icons'>local_shipping</i>
				<span><i class='material-icons'>payment</i></span> 
			</li>
		</ul>
	</div>
</div>
	
	<!-- Refer Flipkart checkout Page -->
	
<div class='container' id='check_panel'>
	<div class='accord'>
		<div id='check_info'>
			<div id='log'>
				<button class='accordion'><span>1</span> LOGIN / SIGNUP</button>
				<div class='pan'>
					<div class='check_login'>
						<div><label>Name </label><span> Abhishek</span></div>
						<div><label>Phone</label><span>9176251176</span></div>
						<div><a href='login.php'>LogOut and SignIn with other Account</a></div> 
						<button type='submit' name='checkout'>CHECKOUT</button>
					</div>
					<div class='check_notify'>
						<div>Advantages of our secure login</div>
						<ul>
							<li><i class='fa fa-truck'></i> Easily Track Orders, Hassle Free Return</li>
							<li><i class='fa fa-bell'></i> Get relevant alerts and recommendation</li>
							<li><i class='fa fa-star'></i> Wishlist, Reviews, Rating and more.</li>
						</ul>
					</div>
				</div>
			</div>

			<div id='deliver'>
				<button class='accordion'><span>2</span> DELIVERY ADDRESS </button>
				<div class='pan'>
					<form action='#' method='post' enctype='multipart/form-data'>				
						<div class='address act'>
							<input type='radio' name='address' value='first_addr' checked='checked'/>
							<div class='first_addr'>
								<div class='cust_info'>Abhishek <span>9176251176</span></div>
								<div class='addr'>B2-104, The Belvedre Akshya Homes, nearby EB Office, GUDUVANCHERRY, CHENNAI, TAMIL NADU - 603202 </div>
								<button name='deliver' type='submit'>DELIVER HERE</button>
							</div>
							<div class='edit'><a href='#'> EDIT </a></div>
						</div>
						<div class='address'>
							<input type='radio' name='address' value='sec_addr' />
							<div class='first_addr'>
								<div class='cust_info'>Vicky <span>7860953517</span></div>
								<div class='addr'>K-65/77 Kabir Chaura Gola Dina Nath, opp. Kabir Chaura Hospital, VARANASI, UTTAR PRADESH - 221001 </div>
							</div>
						</div>
					</form>				
				</div>			
				<div id='add_address'>
					<div class='new_addr'> 
						<a href='#'><i class='fa fa-plus'></i>
						<span>Add a new address</span></a>
					</div>
					
					<div class='curr_addr'>
						<input type='radio' name='address' value='first_addr' />
						<div class='check_form'>
							<span>Add a new address</span>
							<form method='post' action='' enctype='multipart/form-data'>
								<button type='submit'><i class='fa fa-map-marker'></i> Use my Current Location </button>
								<br />
								<input type='text' name='username' placeholder='Name' required />
								<input type='text' name='phone' placeholder='Phone Number' required />
								<br />
								<input type='text' name='pincode' placeholder='Pincode' required />
								<input type='text' name='locality' placeholder='Locality' />
								<br />
								<textarea rows='6' cols='45'>Address (Area and Street) </textarea>
								<br />
								<input type='text' name='city' placeholder='Varanasi' required />
								<input type='text' name='state' placeholder='Uttar Pradesh' required />
								<br />
								<input type='text' name='pincode' placeholder='Landmark(Optional)' />
								<input type='text' name='alt_phone' placeholder='Alternate Phone' />
								<br/>
								
								<div class='time'>
									<p> Address Type </p>
									<input type='radio' name='time' value='home' checked='checked'/>
									<span>Home (All day delivery)</span>
									<input type='radio' name='time' value='work'/>
									<span>Work (Delivery between 10AM - 5PM)</span>
								</div>
								
								<div class='save'>
									<button type='submit' name='save'>SAVE AND DELIVER HERE</button>
									<a href='#'>CLEAR</a> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div id='order'>
				<button class='accordion'><span>3</span> ORDER SUMMARY</button>
				<div class='pan'>
					<div class='ord_group'>
					
						<div class='ord_item'>
							<img src='images/DryFruits/kaju/kaju1.jpg' class='img img-responsive img-thumbnail'/>
							<ul class='ord_detail'>
								<li><a href='#' class='check_cat_name'>Dry Fruits</a></li>
								<li><a href='#' class='check_prod_name'> Special Kaju (Super Plasa)</a></li>
								<li class='prod_price'>
									<i class='fa fa-inr'></i> 900 /<span class='check_per_unit'> 250 gm </span>
									<span class='check_org_price'><i class='fa fa-inr'></i>1000</span>
								</li>
								<li class='check_add'>
									<span class='check_quant'> 1 </span>
									<span class='check_sign'>
										<i class='fa fa-plus'></i>
										<i class='fa fa-minus'></i>
									</span>
									<span class='check_total'>
										<i class='fa fa-inr'></i> 900
									</span>
								</li>
							</ul>
						</div>
						
						<div class='ord_item'>
							<img src='images/DryFruits/kismis/kismis1.jpg' class='img img-thumbnail img-responsive'/>
							<ul class='ord_detail'>
								<li><a href='#' class='check_cat_name'>Dry Fruits</a></li>
								<li><a href='#' class='check_prod_name'> Chaman Kismis (Peshawar)</a></li>
								<li class='prod_price'>
									<i class='fa fa-inr'></i> 400 /<span class='check_per_unit'> 1 kg </span>
									<span class='check_org_price'><i class='fa fa-inr'></i>400</span>
								</li>
								<li class='check_add'>
									<span class='check_quant'> 1 </span>
									<span class='check_sign'>
										<i class='fa fa-plus'></i>
										<i class='fa fa-minus'></i>
									</span>
									<span class='check_total'>
										<i class='fa fa-inr'></i> 400
									</span>
								</li>
							</ul>
						</div>					
						
						<div class='ord_item'>
							<img src='images/DryFruits/badam/badam1.jpg' class='img img-responsive img-thumbnail'/>
							<ul class='ord_detail'>
								<li><a href='#' class='check_cat_name'>Dry Fruits</a></li>
								<li><a href='#' class='check_prod_name'> California Almond </a></li>
								<li class='prod_price'>
									<i class='fa fa-inr'></i> 380 /<span class='check_per_unit'> 500 gm </span>
									<span class='check_org_price'><i class='fa fa-inr'></i>400</span>
								</li>
								<li class='check_add'>
									<span class='check_quant'> 1 </span>
									<span class='check_sign'>
										<i class='fa fa-plus'></i>
										<i class='fa fa-minus'></i>
									</span>
									<span class='check_total'>
										<i class='fa fa-inr'></i> 380
									</span>
								</li>
							</ul>
						</div>
						
						<div class='ord_item'>
							<img src='images/Spices/haldi/haldi1.jpg' class='img img-thumbnail img-responsive'/>
							<ul class='ord_detail'>
								<li><a href='#' class='check_cat_name'>Spices</a></li>
								<li><a href='#' class='check_prod_name'> Haldi (Turmeric)</a></li>
								<li class='prod_price'>
									<i class='fa fa-inr'></i> 90 /<span class='check_per_unit'> 500 gm </span>
									<span class='check_org_price'><i class='fa fa-inr'></i>100</span>
								</li>
								<li class='check_add'>
									<span class='check_quant'> 2 </span>
									<span class='check_sign'>
										<i class='fa fa-plus'></i>
										<i class='fa fa-minus'></i>
									</span>
									<span class='check_total'>
										<i class='fa fa-inr'></i> 180
									</span>
								</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class='check_email'>
						<span>Order confirmation email will be sent to <mark>abhishekkeshari64@gmail.com</mark> </span>
						<button type='submit'>CONTINUE</button>
					</div>
				</div>
			</div>
			
			<div id='check_payment'>			
				<button class='accordion'><span>4</span> PAYMENT OPTIONS </button>
				<div class='pan'>
					<div class='pay_group'>
						<div class='pay'>
							<input type='radio' name='payment' value='pay_method' checked='checked'/>
							<div class='pay_detail'>
								<span class='pay_type'>Credit / Debit Card</span>
								<form action='' method='post' enctype='multipart/form-data'>
									<input id='card_num' type='text' placeholder='Enter Card Number' name='card_num' />
									<br>
									<div class='card_detail'>
										<span class='expiry'> Expiry
											<select class='month'>
												<option>MM</option>
												<option>01</option>
												<option>02</option>
												<option>12</option>
											</select>
											<select class='year'>
												<option>YY</option>
												<option>18</option>
												<option>19</option>
												<option>20</option>
												<option>21</option>
											</select>										
										</span>
										<input id='cvv' type='text' placeholder='CVV' name='cvv' />
										<button>PAY <i class='fa fa-inr' style='margin-left: 5px;'></i> 1,810</button>
									</div>
								</form>
							</div>
						</div>
						
						<div class='pay' id='cod'>
							<input type='radio' name='payment' value='pay_method'/>
							<div class='pay_detail'>
								<span class='pay_type'>Cash on Delivery</span>
								<form action='' method='post' enctype='multipart/form-data'>
									<button>PAY <i class='fa fa-inr' style='margin-left: 5px;'></i> 1,810</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id='check_prod_detail'>
			<div class='check_details'><span>Product Details</span></div>			
			
			<div class='check_prod_item'>
				<span class='span1'> Total (4 items) </span>
				<span class='span2'> <i class='fa fa-inr'></i> 1860 </span>
			</div>
			<div class='check_prod_item'>
				<span class='span1'> Delivery Charge </span>
				<span class='span2'> <i class='fa fa-inr'></i> 50 </span>
			</div>
			<div class='check_prod_item'>
				<span class='span1'> Coupon Discount </span>
				<span class='span2'> <i class='fa fa-inr'></i> 100 </span>
			</div>
			<div class='check_total_price'>
				<span> Price to be paid </span>
				<span> <i class='fa fa-inr'></i> 1810 </span>
			</div> 
		</div>
		
	</div>
	
	<script>
		var acc = document.getElementsByClassName('accordion');
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener('click', function() {
			this.classList.toggle('active');
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + 'px';
			} 
		  });
		}
	</script>
	
</div> 

<?php
	include('includes/foot.php');
?>