<?php
	include('includes/header.php');
?>

<div class='container' id='cart_list'>
	<div class='row alert alert-dismissible'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<span>You might be missing...!!! </span>
		<ul class='prod_list'>
			<li><a href='#' ><img class='img-responsive img-thumbnail' src='images/Spices/Dhaniya/dhaniya1.jpg' alt='Dhaiya' /></a></li>
			<li><a href='#' ><img class='img-responsive img-thumbnail' src='images/Spices/mircha/mircha2.jpg' alt='Mircha' /></a></li>
			<li><a href='#' ><img class='img-responsive img-thumbnail' src='images/Spices/jeera/jeera1.jpg' alt='Jeera' /></a></li>
			<li><a href='#' ><img class='img-responsive img-thumbnail' src='images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot' /></a></li>
			<li><a href='#' ><img class='img-responsive img-thumbnail' src='images/DryFruits/anjeer/anjeer1.jpg' alt='Anjeer' /></a></li>
		</ul>
	</div>
</div>

<div class='container' id='cart'>
	<table class='table table-striped table-responsive row' style='width: 100%;'>
		<thead>
			<tr>
				<th>IMAGE</th>
				<th colspan='3'>ITEM DESCRIPTION</th>
				<th>UNIT PRICE</th>
				<th>QUANTITY</th>
				<th>SUB TOTAL</th>
				<th></th>
				<th>SAVING</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a href='page.php'>
						<img src='images/DryFruits/kaju/kaju1.jpg' class='img-responsive' alt='Image'/>
					</a>
				</td>
				<td colspan='3'>
					<span class='cart_cat_name'>
						<a href='category.php'>Dry Fruits </a>
					</span> <br/>
					<a href='#'> Special Kaju </a>
				</td>
				<td><i class='fa fa-inr'></i> 900 /<span class='per_unit'> 250 gm <span> <br> <span class='org_price'> <i class='fa fa-inr'> </i> 1000 </span></td>
				<td>					
					<div class='cart_add'>
						<span class='cart_quant'> 1 </span>
						<span class='cart_sign'><i class='fa fa-plus'></i><i class='fa fa-minus'> </i></span>
					</div>
				</td>
				<td><span class='some_margin'><i class='fa fa-inr'></i> 900 </span></td>
				<td><span class='some_margin cut' style='font-size: 20px;'>&times; </span></td>
				<td><span class='some_margin saving'><i class='fa fa-inr'></i> 100 </span></td>
			</tr>
			
			<tr>
				<td><a href='page.php'><img src='images/DryFruits/kismis/kismis1.jpg' class='img-responsive' alt='Image'/></a></td>
				<td colspan='3'> <span class='cart_cat_name'> <a href='category.php'>Dry Fruits </a></span> <br/> <a href='#'> Chaman Kismis </a></td>
				<td><i class='fa fa-inr'></i> 400 /<span class='per_unit'> 1 kg <span> <br> <span class='org_price'> <i class='fa fa-inr'> </i> 400 </span></td>
				<td>					
					<div class='cart_add'>
						<span class='cart_quant'> 1 </span>
						<span class='cart_sign'><i class='fa fa-plus'></i><i class='fa fa-minus'> </i></span>
					</div>
				</td>
				<td><span class='some_margin'><i class='fa fa-inr'></i> 400 </span></td>
				<td><span class='some_margin cut' style='font-size: 20px;'>&times; </span></td>
				<td><span class='some_margin saving'><i class='fa fa-inr'></i> 0.00 </span></td>
			</tr>
			
			<tr>
				<td><a href='page.php'><img src='images/DryFruits/badam/badam1.jpg' class='img-responsive' alt='Image'/></a></td>
				<td colspan='3'> <span class='cart_cat_name'> <a href='category.php'>Dry Fruits </a></span> <br/> <a href='#'> California Almond</a></td>
				<td><i class='fa fa-inr'></i> 380 /<span class='per_unit'> 500 gm <span> <br> <span class='org_price'> <i class='fa fa-inr'> </i> 400 </span></td>
				<td>					
					<div class='cart_add'>
						<span class='cart_quant'> 1 </span>
						<span class='cart_sign'><i class='fa fa-plus'></i><i class='fa fa-minus'></i></span>
					</div>
				</td>
				<td><span class='some_margin'><i class='fa fa-inr'></i> 380 </span></td>
				<td><span class='some_margin cut' style='font-size: 20px;'>&times; </span></td>
				<td><span class='some_margin saving'><i class='fa fa-inr'></i> 20 </span></td>
			</tr>
			
			<tr>
				<td><a href='page.php'><img src='images/Spices/haldi/haldi.jpg' class='img-responsive' alt='Image'/></a></td>
				<td colspan='3'> <span class='cart_cat_name'> <a href='category.php'> Spices </a></span> <br/> <a href='#'> Haldi(Turmeric) </a></td>
				<td><i class='fa fa-inr'></i> 90 /<span class='per_unit'> 500 gm <span> <br> <span class='org_price'> <i class='fa fa-inr'> </i> 100 </span></td>
				<td>					
					<div class='cart_add'>
						<span class='cart_quant'> 2 </span>
						<span class='cart_sign'><i class='fa fa-plus'></i><i class='fa fa-minus'></i></span>
					</div>
				</td>
				<td><span class='some_margin'><i class='fa fa-inr'></i> 180 </span></td>
				<td><span class='some_margin cut' style='font-size: 20px;'>&times; </span></td>
				<td><span class='some_margin saving'><i class='fa fa-inr'></i> 20 </span></td>
			</tr>
			
		<tbody>
	</table>
	
	 
	<div id='cart_total'>
		<div class='row'>	
			<div class='col-sm-6 row'>			
				<div class='col-sm-12' id='coupon'>					
					<div class='row money'>
						<h4 class='offset-sm-3 col-sm-7'>Coupon</h4>
						<span class='col-sm-2'><i class='fa fa-money'></i></span>
					</div>
					
					<div class='row' id='coupon_code'>
						<input type='text' class='offset-sm-1 col-sm-8' placeholder='Coupon Code' />
						<button class='col-sm-2'>Apply</button>
					</div>					
				</div>
				
				<div class='col-sm-12 basket'>
					<button class='cart_basket'>
						<i class='fa fa-shopping-basket'></i> Continue Shopping 
					</button>
					<button class='cart_card'>
						<i class='fa fa-credit-card'></i> Checkout 
						<i class='fa fa-angle-double-right'></i>
					</button>
				</div>
			</div>
			
			<div class='offset-sm-1 col-sm-5' id='prod_details'>
				<div class='row'><span class='details'>Product Details</span></div>
				<hr/>
				<div class='row prod_item'>
					<span class='col-sm-7'>	Total (4 items) </span>
					<span class='offset-sm-2 col-sm-3'>	<i class='fa fa-inr'></i> 1860 </span>
				</div>
				<div class='row prod_item'>
					<span class='col-sm-7'>	Delivery Charge </span>
					<span class='offset-sm-2 col-sm-3'>	<i class='fa fa-inr'></i> 50 </span>
				</div>
				<div class='row prod_item'>
					<span class='col-sm-7'>	Coupon Discount </span>
					<span class='offset-sm-2 col-sm-3'><i class='fa fa-inr'></i> 100 </span>
				</div>
				<hr/>
				<div class='row total_price'>
					<span class='col-sm-7'>	Price to be paid </span>
					<span class='offset-sm-2 col-sm-3'><i class='fa fa-inr'></i> 1810 </span>
				</div>
			</div>
		</div>
	</div>  
</div>

<div class='container' id='simProd' class='heading'>
	<div class='row feat' >
		<div class='col-md-3 col-5 title'> SIMILAR PRODUCT </div>
		<div class='col-md-8 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides(-1, 0)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides(1, 0)'></i></a>
		</div>
	</div>
	<div class='row product'>
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kaju/kaju1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Special Kaju</h6>
				<h4><i class='fa fa-inr'></i> 900</h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>      
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kismis/kismis1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Chaman Kismis</h6>
				<h4><i class='fa fa-inr'></i> 400</h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/badam/badam1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>California Almond</h6>
				<h4><i class='fa fa-inr'></i> 760</h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kashmiri Akhrot</h6>
				<h4><i class='fa fa-inr'></i> 1200</h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/makhana/makhana1.jpg' alt='Makhana'>
			</div>
			<div>
			<center>
				<h6>Rasgulla Makhana</h6>
				<h4><i class='fa fa-inr'></i> 720</h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
	</div>
</div>

<?php
	include('includes/footer.php');
?>