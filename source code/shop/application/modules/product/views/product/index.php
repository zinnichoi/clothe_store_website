<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption wow bounceInUp">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption wow bounceInRight">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<?php $currentURL = $_SERVER['REQUEST_URI']; ?>
  <?php $select = 'selected=/"selected/"'; ?>
<h1 class="news-heading wow bounceIn">Products</h1>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-4  ">
			<select name="select_item" class="select_item" onchange="location = this.value;">
								<option value="<?= base_url() ?>product/index" <?php if ($currentURL == "/shop/product/index"){echo $select;} ?>  >Default sorting</option>
								<option  value="<?= base_url() ?>product/filter/0" <?php if ($currentURL == "/shop/product/filter/0"){echo $select;} ?>  >Price : low to high</option>
								<option value="<?= base_url() ?>product/filter/1" <?php if ($currentURL == "/shop/product/filter/1"){echo $select;} ?>  >Price : high to low</option>
			</select>
						</div>
					</div>
		
		<div class="row wow bounceInRight">
			<?php foreach ($list_product as $value) {?>
		<div class="col-xs-12 col-md-3 text-center addcart ">
			<a href="product/get_product_by_id/<?php echo($value["product_id"]) ?> ">
				<img src="public/images/<?php echo($value["product_thumb"]) ?>" style = "height:300px;width: 300px;" alt="" class="img-thumbnail" > 
			</a>
				<a href="product/get_product_by_id/<?php echo($value["product_id"]) ?>"> 
					<?php echo($value["product_title"]) ?>			
					</a>
					<div class="simpleCart_shelfItem">
						<h4> <?php echo(number_format($value["product_price"])) ?> vnd </h4>
							<a style="background: #02020266;padding: 3px 15px; outline: none;margin-top: 50px;color: #fff;border: none;" href="<?= site_url('cart/cart/add?id=' . $value['product_id'] . '&qty=1&price=' . $value['product_price']) ?>">Add to cart</a>
						</div>
					</div>
				
		 <?php } ?>
		 </div>
<div class="container">
	<div class="row">
		<!-- 
			<nav>
		<div class="col-md-4 col-xs-12 col-md-offset-9 ">
						  <ul class="pagination">
								<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><span aria-hidden="true">»</span></a></li>
						   </ul>
						</nav>
		</div>
	-->
	</div>
</div>