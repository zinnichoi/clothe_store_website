
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
						<a class="hvr-outline-out button2" href="home">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="home">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption wow bounceInRight">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="home">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="home">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption wow bounceIn">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="home">Shop Now </a>
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

<h1 class="news-heading wow bounceIn">Products</h1>
<div class="container">
		<?php foreach ($results as $value) {?>
		<div class="row wow bounceInRight">
		<div class="col-xs-12 col-md-4 text-center addcart ">
			<a href="product/get_product_by_id/<?php echo($value["product_id"]) ?> "><img src="public/images/<?php echo($value["product_thumb"]) ?>" alt="" class="img-thumbnail" style = "height:300px;width: 300px;" > </a>
				<h5><a href="single.html"><?php echo($value["product_title"]) ?></a></h5>
					<div class="simpleCart_shelfItem">
						<h4> <?php echo(number_format($value["product_price"])) ?> vnd </h4>
							<a href="<?= site_url('cart/cart/add?id=' . $value['product_id'] . '&qty=1&price=' . $value['product_price']) ?>">Add to cart</a>
						</div>
					</div>
		 <?php } ?>
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