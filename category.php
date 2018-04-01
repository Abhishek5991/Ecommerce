<?php
	include('includes/header.php');
?>

<div class='container-fluid' style='background-color: #f5f5f5;' id='breadcrumb'>
	<div class='container'>
		<ul class='breadcrumb' style='background-color: #f5f5f5;'>
			<li class='breadcrumb-item' ><a href='#'>Home</a></li>
			<li class='breadcrumb-item'><a href='#'>Dry Fruits</a></li>
		</ul>
	</div>
</div>

<div class='container' id='cat_info'>
  <div class='row'>
    <div class='col-sm-3' id='cat_side' style='border-right: 1px solid #eee;'>
		<h4>Categories: <small>Dry Fruits</small></h4>
		<br/>
		<div class='cat_brand'>
			<span>Brand </span>
			<ul class='cat'>
				<li><input type='checkbox'/><a href='#'>Anup</a></li>			
				<li><input type='checkbox'/><a href='#'>Coco</a></li>			
				<li><input type='checkbox'/><a href='#'>Baadshah</a></li>			
				<li><input type='checkbox'/><a href='#'>Real</a></li>			
			</ul>
		</div>
		<div class='cat_price'>
			<span>Price </span>
			<ul class='cat'>
				<li><input type='checkbox'/><a href='#'><i class='fa fa-inr'></i> 100 to <i class='fa fa-inr'></i> 250</a></li>		
				<li><input type='checkbox'/><a href='#'><i class='fa fa-inr'></i> 250 to <i class='fa fa-inr'></i> 500</a></li>		
				<li><input type='checkbox'/><a href='#'><i class='fa fa-inr'></i> 500 to <i class='fa fa-inr'></i> 1000</a></li>		
				<li><input type='checkbox'/><a href='#'><i class='fa fa-inr'></i> 1000 to <i class='fa fa-inr'></i> 1500</a></li>		
				<li><input type='checkbox'/><a href='#'> More than <i class='fa fa-inr'></i> 1500 </a></li>		
			</ul>
		</div>
		<div class='cat_discount'>
			<span>Discount </span>
			<ul class='cat'>
				<li><input type='checkbox'/><a href='#'> Upto 5% (37) </a></li>	
				<li><input type='checkbox'/><a href='#'> 5% - 10% (15) </a></li>	
				<li><input type='checkbox'/><a href='#'> 10% - 15% (7) </a></li>	
				<li><input type='checkbox'/><a href='#'> 15% - 25% (6) </a></li>	
				<li><input type='checkbox'/><a href='#'> More than 25% (3) </a></li>	
			</ul>
		</div>
		<div class='cat_size'>
			<span>Size </span>
			<ul class='cat'>
				<li><input type='checkbox'/><a href='#'> 50 gm packet </a></li>	
				<li><input type='checkbox'/><a href='#'> 100 gm packet </a></li>	
				<li><input type='checkbox'/><a href='#'> 200 gm packet </a></li>	
				<li><input type='checkbox'/><a href='#'> 250 gm packet </a></li>	
				<li><input type='checkbox'/><a href='#'> 500 gm packet </a></li>	
				<li><input type='checkbox'/><a href='#'> 1 kg packet </a></li>	
			</ul>
		</div>
	</div>
	
    <div class='col-sm-9'>   
		<div class='container'>
			<div id='Carouseldf' class='carousel slide' data-ride='carousel'>
				<ul class='carousel-indicators'>
					<li data-target='#Carouseldf' data-slide-to='0' class='active'></li>
					<li data-target='#Carouseldf' data-slide-to='1'></li>
					<!-- <li data-target='#myCarousel' data-slide-to='2'></li>  -->
				</ul>

			  <!-- The slideshow -->
				<div class='carousel-inner'>
					<div class='carousel-item active'>
						<img class='img-responsive' src='admin_area/slide_images/patanjali1.jpg' alt='Los Angeles'>
					</div>
					<div class='carousel-item'>
						<img class='img-responsive' src='admin_area/slide_images/ration1.jpg' alt='Chicago'>
					</div> 					
				</div>

			  <!-- Left and right controls -->
				<a class='carousel-control-prev' href='#Carouseldf' data-slide='prev'>
					<span class='carousel-control-prev-icon'></span>
				</a>
				<a class='carousel-control-next' href='#Carouseldf' data-slide='next'>
					<span class='carousel-control-next-icon'></span>
				</a>
			</div>
			
			<div class='row cat_product'>
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
					<a>
					<div>
						<img class='img-responsive img-thumbnail' src='images/DryFruits/chohara/chohara1.jpg' alt='Chohara'>
					</div>
					<div>
					<center>
						<h6>Chohara</h6>
						<h4><i class='fa fa-inr'></i> 180</h4>
						<i class='fa fa-heart'></i>
						<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
						<i class='material-icons'>compare</i>
					</center>
					</div>
					</a>
				</div>
				<div class='cat_sp'>
					<a>
					<div>
						<img class='img-responsive img-thumbnail' src='images/DryFruits/pista/pista1.jpg' alt='Pista'>
					</div>
					<div>
					<center>
						<h6>Pista</h6>
						<h4><i class='fa fa-inr'></i> 1600</h4>
						<i class='fa fa-heart'></i>
						<button type='submit'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
						<i class='material-icons'>compare</i>
					</center>
					</div>
					</a>
				</div>
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
				<div class='cat_sp'>
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
    </div>
  </div>
</div>

<?php
	include('includes/footer.php');
?>