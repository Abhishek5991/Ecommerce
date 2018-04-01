<?php
	include('includes/header.php');
?>

<div class='container-fluid' style='background-color: #f5f5f5;' id='breadcrumb'>
	<div class='container'>
		<ul class='breadcrumb' style='background-color: #f5f5f5;'>
			<li class='breadcrumb-item' ><a href='#'>Home</a></li>
			<li class='breadcrumb-item'><a href='#'>Spices</a></li>
			<li class='breadcrumb-item'><a href='#'>ChotiElaichi</a></li>
		</ul>
	</div>
</div>

<div class='container' id='prod'>
	<div class='row'>
		<div class='col-md-4'>
			<div class='bigimage row'>
				<div class='col-11'>
					<img src='images/Spices/chotielaichi/chotielaichi1.jpg' class='img-responsive img-thumbnail' />
				</div>
			</div>
			<div class='imglist row'>
				<img src='images/Spices/chotielaichi/chotielaichi1.jpg' style='margin-left: 15px;' class='col-3' />
				<img src='images/Spices/chotielaichi/chotielaichi2.jpg' class='col-3' />
				<img src='images/Spices/chotielaichi/chotielaichi2.jpg' class='col-3' />
			</div>
		</div>
		<div class='col-md-5 prod_detail'>
			<p> Spices </p>
			<h3 >Choti Elaichi</h3>
			<div class='rating'>
				<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star' style='padding-right:25px;'></i>
				<span> 0 Review(s)</span>
			</div>
			<div class='short-description'>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<hr />
			<div class='option'>
				<div>
					<h3><i class='fa fa-inr'></i> 100 / <small class='unit_wt'> 50 g</small></h3>
					<div class='stock'><b style='padding-right: 6px;'>Availability:</b> In stock</div>
				</div>
				<ul>
					<li>
						<input type='radio' name='chotielaichi' value='' />
						<div>
							<span><span class='unit_wt2'>1 kg</span> - <span class='sell_price'><i class='fa fa-inr'></i> 1600 </span></span>
							<span class='page_org_price'> 1800 </span>
						</div>
					</li>
					<li>
						<input type='radio' name='chotielaichi' value='' />
						<div>
							<span><span class='unit_wt2'>500 gm</span> - <span class='sell_price'><i class='fa fa-inr'></i> 850 </span></span>
							<span class='page_org_price'> 900 </span>
						</div>
					</li>
					<li>
						<input type='radio' name='chotielaichi' value='' />
						<div>
							<span><span class='unit_wt2'>250 gm</span> - <span class='sell_price'><i class='fa fa-inr'></i> 450 </span></span>
							<span class='page_org_price'> 475 </span>
						</div>
					</li>
					<li>
						<input type='radio' name='chotielaichi' value='' />
						<div>
							<span><span class='unit_wt2'>100 gm</span> - <span class='sell_price'><i class='fa fa-inr'></i> 190 </span></span>
							<span class='page_org_price'> 190 </span>
						</div>
					</li>
				</ul>
			</div>
			<hr />
			<div class='add_to_cart'>
				<div class='quant'> 1 </div>
				<div class='sign'><i class='fa fa-plus'></i><i class='fa fa-minus'></i></div>
				<button><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<span> <i class='fa fa-heart'></i> <i class='material-icons'>compare</i> </span>
			</div>
			<hr />
			<div class='icons'><span style='font-size: 20px; margin-right: 10px; color: #666'> Share: </span> 
				<i style='color: rgb(59, 89, 152);' class='fa fa-facebook-square'></i>
				<i style='color: rgb(211, 72, 54);' class='fa fa-google-plus-square'></i>
				<i style='color: #0e76a8;' class='fa fa-linkedin-square'></i>
				<i style='color: #fb3958;' class='fa fa-instagram'></i>
				<i style='color: rgb(0, 132, 180);' class='fa fa-twitter-square'></i>
			</div>
		</div>
		<div class='col-md-3'>
			<div class='row sidebar'>
				<div class='col-12' style='border-bottom: 1px solid #bbb; padding: 20px 14px;'>
					<div style='float:left; font-size: 30px; padding-right: 10px;'><i class='fa fa-truck'></i></div>
					<div>
						<span class='h6'>Free Shipping & Return</span><br>
						<span>Free shipping on all orders over <i class='fa fa-inr' style='padding-left: 40px;'></i> 100<span>
					</div>
				</div>
				<div class='col-12' style='border-bottom: 1px solid #bbb; padding: 20px 20px;'>
					<div style='float:left; font-size: 30px; padding-right: 17px;'><i class='fa fa-inr'></i></div>
					<div>
						<span class='h6'>Money Back Guarantee</span><br>
						<span>100% money back guarantee.<span>
					</div>
				</div>
				<div class='col-12' style='padding: 20px 14px;'>
					<div style='float:left; font-size: 30px; padding-right: 10px;'><i class='fa fa-support'></i></div>
					<div>
						<span class='h6'>Online Support 24/7</span><br>
						<span>Lorem ipsum dolor sit amet.<span>
					</div>
				</div>
			</div>
			
			<div class='row page_prod_detail'>
				<p>Total (4 items)</p>
				<p>Price to be paid <i class='fa fa-inr' style='margin-left: 70px;'></i> 1810</p>				
				<a class='offset-md-3' href='checkout.php'><i class='fa fa-credit-card'></i> Checkout</a>
			</div>
		</div>
	</div>
	<hr />
</div>

<div class='container' id='describe'>	
	<ul class='nav nav-tabs' role='tablist'>
		<li class='nav-item'>
			<a class='nav-link active' data-toggle='tab' href='#desc'>Description</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' data-toggle='tab' href='#how_to_use'>How to Use</a>
		</li>
		<li class='nav-item'>
			<a class='nav-link' data-toggle='tab' href='#medical_treatment'>Medical Treatment</a>
		</li>
	</ul>
	
	
	<div class='tab-content desc_block'>
		<div id='desc' class='tab-pane active'><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		</div>
		<div id='how_to_use' class='tab-pane fade'><br>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		</div>
		<div id='medical_treatment' class='tab-pane fade'><br>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		</div>
	</div>
</div>

							<!-- 	Similar Product 	-->

<div class='container' id='simProd' class='heading'>
	<div class='row feat' >
		<div class='col-md-3 col-5 title'> SIMILAR PRODUCT </div>
		<div class='col-md-8 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides("simp", simpIndex, -1)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides("simp", simpIndex, 1)'></i></a>
		</div>
	</div>
	<div class='row product'>
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kaju/kaju1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Special Kaju</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>      
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kismis/kismis1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Chaman Kismis</h6>
				<h4><i class='fa fa-inr'></i> 400 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/badam/badam1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>California Almond</h6>
				<h4><i class='fa fa-inr'></i> 760 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kashmiri Akhrot</h6>
				<h4><i class='fa fa-inr'></i> 1200 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/makhana/makhana1.jpg' alt='Makhana'>
			</div>
			<div>
			<center>
				<h6>Rasgulla Makhana</h6>
				<h4><i class='fa fa-inr'></i> 720 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/chohara/chohara1.jpg' alt='Chohara'>
			</div>
			<div>
			<center>
				<h6>Chohara</h6>
				<h4><i class='fa fa-inr'></i> 180 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='simp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/pista/pista1.jpg' alt='Pista'>
			</div>
			<div>
			<center>
				<h6>Pista</h6>
				<h4><i class='fa fa-inr'></i> 1600 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div> 
	</div>
</div>

								<!-- 	Recommended Product 	-->								

<div class='container' id='recomProd' class='prodHead heading'>
	<div class='row feat' >
		<div class='col-md-3 col-5 title'> RECOMMENDED </div>
		<div class='col-md-8 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides("recom", recomIndex, -1)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides("recom", recomIndex, 1)'></i></a>
		</div>
	</div>
	<div class='row product'>
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kaju/kaju1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Special Kaju</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>      
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kismis/kismis1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Chaman Kismis</h6>
				<h4><i class='fa fa-inr'></i> 400 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/badam/badam1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>California Almond</h6>
				<h4><i class='fa fa-inr'></i> 760 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kashmiri Akhrot</h6>
				<h4><i class='fa fa-inr'></i> 1200 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/makhana/makhana1.jpg' alt='Makhana'>
			</div>
			<div>
			<center>
				<h6>Rasgulla Makhana</h6>
				<h4><i class='fa fa-inr'></i> 720 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/chohara/chohara1.jpg' alt='Chohara'>
			</div>
			<div>
			<center>
				<h6>Chohara</h6>
				<h4><i class='fa fa-inr'></i> 180 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='recom'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/pista/pista1.jpg' alt='Pista'>
			</div>
			<div>
			<center>
				<h6>Pista</h6>
				<h4><i class='fa fa-inr'></i> 1600 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div> 
	</div>
</div>
										<!-- 	   Viewed Product 		-->

<div class='container' id='viewProd' class='prodHead heading'>
	<div class='row feat' >
		<div class='col-md-3 col-5 title'> VIEWED PRODUCT </div>
		<div class='col-md-8 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides("view", viewIndex, -1)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides("view", viewIndex, 1)'></i></a>
		</div>
	</div>
	<div class='row product'>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kaju/kaju1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Special Kaju</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>      
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/kismis/kismis1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Chaman Kismis</h6>
				<h4><i class='fa fa-inr'></i> 400 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/badam/badam1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>California Almond</h6>
				<h4><i class='fa fa-inr'></i> 760 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/akhrot/akhrot1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kashmiri Akhrot</h6>
				<h4><i class='fa fa-inr'></i> 1200 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/makhana/makhana1.jpg' alt='Makhana'>
			</div>
			<div>
			<center>
				<h6>Rasgulla Makhana</h6>
				<h4><i class='fa fa-inr'></i> 720 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/chohara/chohara1.jpg' alt='Chohara'>
			</div>
			<div>
			<center>
				<h6>Chohara</h6>
				<h4><i class='fa fa-inr'></i> 180 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='view'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/DryFruits/pista/pista1.jpg' alt='Pista'>
			</div>
			<div>
			<center>
				<h6>Pista</h6>
				<h4><i class='fa fa-inr'></i> 1600 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div> 
	</div>
</div>

<script>
var disp=4;
var viewIndex=[0], recomIndex=[0], simpIndex=[0];
if(window.innerWidth >= 992){
    disp = 5;
}else if(window.innerWidth >= 768){
	disp = 4;
}else if(window.innerWidth >= 576){
	disp = 3;
}else{
	disp = 2;
}
showSlides('simp', simpIndex);
showSlides('recom', recomIndex);
showSlides('view', viewIndex);

function plusSlides(p, index, n) {
	if(n>0){
		index[0] += disp;
		showSlides(p, index);
	}else{
		index[0] -= disp;
		showSlides(p, index);
	}
}

function showSlides(p, index) {
  var i;
  var dp = document.getElementsByClassName(p);
  var dplen = dp.length;
  if(index[0] + disp >= dplen){
	  index[0] = dplen-disp;
	}
  if(index[0] < 0){
	  index[0] = 0;
	}
  for (i = 0; i < index[0]; i++) {
      dp[i].style.display = 'none';
  }
  for (i = index[0]; i < index[0]+disp; i++) {
      dp[i].style.display = 'block';
  }
  for (i = index[0]+disp; i < dplen; i++) {
      dp[i].style.display = 'none';
  }   
} 
</script>

<?php
	include('includes/footer.php');
?>