<?php
	include('includes/header.php');
?>

<div id='myCarousel' class='carousel slide' data-ride='carousel' style='border-top: 1px solid #bbb;'>
  <!-- Indicators -->
	<ul class='carousel-indicators'>
		<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
		<li data-target='#myCarousel' data-slide-to='1'></li>
		<!-- <li data-target='#myCarousel' data-slide-to='2'></li>  -->
	</ul>

  <!-- The slideshow -->
	<div class='carousel-inner'>
		<div class='carousel-item active'>
			<img class='img-responsive' src='admin_area/slide_images/patanjali1.jpg' alt='Los Angeles'>
		</div>
		<div class='carousel-item'>
			<img class='img-responsive' src='admin_area/slide_images/ration1.jpg' alt='Chicago'>
		</div> <!-- 
		<div class='carousel-item'>
			<img class='img-responsive' src='admin_area/slide_images/ny.jpg' alt='New York'>
		</div>  -->
	</div>

  <!-- Left and right controls -->
	<a class='carousel-control-prev' href='#myCarousel' data-slide='prev'>
		<span class='carousel-control-prev-icon'></span>
	</a>
	<a class='carousel-control-next' href='#myCarousel' data-slide='next'>
		<span class='carousel-control-next-icon'></span>
	</a>
</div>

<div class='container-fluid'>
	<div class='row' id='truck'>
		<div class='offset-md-1 col-md-3 offset-1 col-11 service' style='border-right: 1px solid #bbb;'>
			<div><i class='fa fa-truck'></i></div>
			<div>
				<span class='h6'>FREE SHIPPING & RETURN</span><br>
				<span>Free shipping on all orders over $100.<span>
			</div>
		</div>
		<div class='col-md-4 col-12' style='padding: 0; border-right: 1px solid #bbb;'>
			<div class='row' style='padding: 0;'>
				<div class='offset-md-3 col-md-7 offset-1 col-9 service'>
					<div><i class='fa fa-inr'></i></div>
					<div>
						<span class='h6'>MONEY BACK GUARANTEE</span><br>
						<span>100% money back guarantee.<span>
					</div>
				</div>
				<div class='col-md-2 col-3'></div>
			</div>
		</div>
		<div class='col-md-3 offset-1 col-11 service'>
			<div><i class='fa fa-support'></i></div>
			<div>
				<span class='h6'>ONLINE SUPPORT 24/7</span><br>
				<span>Lorem ipsum dolor sit amet.<span>
			</div>
		</div>
	</div>
</div>

<div class='container' id='img_block'>
	<div class='row'>
		<div class='col-md-3' >
			<img src='images/DryFruits/mix/mix1.jpg' alt='Dry Fruits' class='img-responsive img-thumbnail'>
		</div>
		<div class='col-md-3'>
			<img src='images/Spices/mix/mix1.jpg' alt='Spices' class='img-responsive img-thumbnail'>
		</div>
		<div class='col-md-3'>
			<img src='images/HomeCare/daily4.jpg' alt='House Product' class='img-responsive img-thumbnail'>
		</div>
		<div class='col-md-3'>
			<img src='images/MedicalCare/med1.jpg' alt='Medical' class='img-responsive img-thumbnail'>
		</div>
	</div>
</div>

<div class='container' id='dryProd' class='heading'>
	<div class='row feat' >
		<div class='col-md-2 col-5 title'> DRY FRUITS </div>
		<div class='col-md-9 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides("df", dfIndex, -1)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides("df", dfIndex, 1)'></i></a>
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
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
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
				<h4><i class='fa fa-inr'></i> 400 / <small>kg</small></h4>
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
				<h4><i class='fa fa-inr'></i> 760 / <small>kg</small></h4>
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
				<h4><i class='fa fa-inr'></i> 1200 / <small>kg</small></h4>
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
				<h4><i class='fa fa-inr'></i> 720 / <small>kg</small></h4>
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
		<div class='df'>
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
		<div class='df'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/dhaniya/dhaniya1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Dhania</h6>
				<h4><i class='fa fa-inr'></i> 180 / <small>kg</small> </h4>
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
				<img class='img-responsive img-thumbnail' src='images/Spices/haldi/haldi1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Haldi</h6>
				<h4><i class='fa fa-inr'></i> 200 / <small>kg</small></h4>
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
				<img class='img-responsive img-thumbnail' src='images/Spices/mircha/mircha1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Mircha</h6>
				<h4><i class='fa fa-inr'></i> 160 / <small>kg</small></h4>
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
				<img class='img-responsive img-thumbnail' src='images/Spices/jeera/jeera1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>Jeera</h6>
				<h4><i class='fa fa-inr'></i> 260 / <small>kg</small></h4>
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
				<img class='img-responsive img-thumbnail' src='images/Spices/kalimirch/kalimirch1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kalimirch</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
	</div>
</div>

<div id='checkdfvalue' style='background: yellow; font-size: 25px;'></div> 

<div class='container' id='spicesProd' class='heading'>
	<div class='row feat' >
		<div class='col-md-2 col-5 title'> SPICES </div>
		<div class='col-md-9 col-4' style='height: 3px; margin-top:12px; background: linear-gradient(to right, #aaa, #eeeeef);'> </div>
		<div class='col-md-1 col-3'><span style='padding-right:40px;'></span>
			<a><i class='fa fa-chevron-left' onclick='plusSlides("sp", spIndex, -1)'></i></a>
			<a><i class='fa fa-chevron-right' onclick='plusSlides("sp", spIndex, 1)'></i></a>
		</div>
	</div>
	<div class='row product'>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/dhaniya/dhaniya1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Dhania</h6>
				<h4><i class='fa fa-inr'></i> 180 / <small>kg</small> </h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>  
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/haldi/haldi1.jpg' alt='Kaju'>
			</div>
			<div>
			<center>
				<h6>Haldi</h6>
				<h4><i class='fa fa-inr'></i> 200 / <small>kg</small> </h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>      
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/mircha/mircha1.jpg' alt='Kismis'>
			</div>
			<div>
			<center>
				<h6>Mircha</h6>
				<h4><i class='fa fa-inr'></i> 160 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/jeera/jeera1.jpg' alt='Badam'>
			</div>
			<div>
			<center>
				<h6>Jeera</h6>
				<h4><i class='fa fa-inr'></i> 260 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/kalimirch/kalimirch1.jpg' alt='Akhrot'>
			</div>
			<div>
			<center>
				<h6>Kalimirch</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/badielaichi/badielaichi1.jpg' alt='Makhana'>
			</div>
			<div>
			<center>
				<h6>Badi Elaichi</h6>
				<h4><i class='fa fa-inr'></i> 1600 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/mix/mix1.jpg' alt='Chohara'>
			</div>
			<div>
			<center>
				<h6>Garam Masala</h6>
				<h4><i class='fa fa-inr'></i> 900 / <small>kg</small></h4>
				<i class='fa fa-heart'></i>
				<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
				<i class='material-icons'>compare</i>
			</center>
			</div>
			</a>
		</div>
		<div class='sp'>
			<a>
			<div>
				<img class='img-responsive img-thumbnail' src='images/Spices/lounge/lounge1.jpg' alt='Pista'>
			</div>
			<div>
			<center>
				<h6>Lounge</h6>
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

<div id='checkspvalue' style='background: yellow; font-size: 25px;'></div> 

<div class='container' id='brand'>
	<div class='row' style='margin:45px 0 30px 0;'>
		<div class='col-md-4 col-3 col-xs-2' style='height: 3px; margin-top:12px; background:linear-gradient(to right, #eeeeef, #aaa);'></div>
		<div class='col-md-4 col-6 col-xs-8' style='font-size: 20px; font-weight: bold;'><center>POPULAR <span style='padding-right: 12px;'></span> BRANDS</center></div>
		<div class='col-md-4 col-3 col-xs-2' style='height: 3px; margin-top:12px; background:linear-gradient(to right, #aaa, #eeeeef);'></div>
	</div>
	<div class='row brandname'>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/dove1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/mamypoko1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/boutique1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/patanjali1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/minutemaid1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
		<div class='col-md-2 col-6'>
			<img src='admin_area/brand_images/ayush1.jpg' class='img-responsive img-thumbnail' alt=''>
		</div>
	</div>
</div>



<script>
var disp=5;
var dfIndex = [0];
var spIndex = [0];
var w = window.innerWidth;
if(w >= 992){
	disp = 5;
}else if(w >= 768){
	disp = 3;
}else{
	disp = 2;
}

document.getElementsByTagName("body")[0].onresize = function(){
	var w = window.innerWidth;
	if(w >= 992){
		disp = 5;
	}else if(w >= 768){
		disp = 3;
	}else{
		disp = 2;
	}	
	showSlides('df', 0);
	showSlides('sp', 0);
};
showSlides('df', dfIndex);
showSlides('sp', spIndex);

function plusSlides(p, index, n) {
	if(n>0){		
		index[0] += disp;
		showSlides(p, index);
	}
	else{
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
