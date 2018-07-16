
<!-- //Heat-bottom -->
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
        <!-- The Modal -->
    </div> 
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-5 bb-grids bb-left">
                <a href="home"><div class="bb-left-inner">
                    <h3>SALE</h3>
                    <h4>upto <span>75%</span></h4>
                </div></a>
                
            </div>
            <div class="col-md-4 bb-grids bb-middle">
            <a href="home"><div class="bb-middle-top">
                <h3>SALE</h3>
                <h4>upto<span>55%</span></h4>
            </div></a>
            <a href="home"><div class="bb-middle-bottom">
                <h3>SALE</h3>
                <h4>upto<span>65%</span></h4>
            </div></a>
        </div>
        <div class="col-md-3 bb-grids bb-right">
            <a href="home"><div class="bb-right-top">
                <h3>SALE</h3>
                <h4>upto<span>50%</span></h4>
            </div></a>
            <a href="home"><div class="bb-right-bottom">
                <h3>SALE</h3>
                <h4>upto<span>60%</span></h4>
            </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
        </div>
 


 <div class="top-products">
    <div class="container">
        <h3 class="wow bounceInUp">Lated Products</h3>
        <div class="sap_tabs">          
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Top</span></li>                 
                </ul>   
                <div class="clearfix"> </div>   
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 wow slideInUp" data-wow-delay=".5s">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[0]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[0]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[0]['product_id'] . '&qty=1&price=' . $list_lated_product[0]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Formal shoes" /> 
                                    <input type="hidden" name="amount" value="220.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[0]["product_id"]) ?>"> <?php echo $list_lated_product[0]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[0]['product_price']) ?> vnd</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[1]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[1]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[1]['product_id'] . '&qty=1&price=' . $list_lated_product[1]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
                                    <input type="hidden" name="amount" value="190.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[1]["product_id"]) ?>"> <?php echo $list_lated_product[1]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[1]['product_price']) ?> vnd</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[2]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[2]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[2]['product_id'] . '&qty=1&price=' . $list_lated_product[2]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Blazer" /> 
                                    <input type="hidden" name="amount" value="160.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[2]["product_id"]) ?>"> <?php echo $list_lated_product[2]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[2]['product_price']) ?> vnd</h5>                      
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[3]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[3]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[3]['product_id'] . '&qty=1&price=' . $list_lated_product[3]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Casual shoes" /> 
                                    <input type="hidden" name="amount" value="250.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[3]["product_id"]) ?>"> <?php echo $list_lated_product[3]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[3]['product_price']) ?> vnd</h5>                       
                        </div>

                        <!-- /////Row 2////// -->
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                        <div class="col-md-3 top-product-grids tp5">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[4]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[4]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[4]['product_id'] . '&qty=1&price=' . $list_lated_product[4]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Formal Shirt" /> 
                                    <input type="hidden" name="amount" value="50.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[4]["product_id"]) ?>"> <?php echo $list_lated_product[4]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[4]['product_price']) ?> vnd</h5>                     
                        </div>
                        <div class="col-md-3 top-product-grids tp6">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[5]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[5]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[5]['product_id'] . '&qty=1&price=' . $list_lated_product[5]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Blue Formal Shirt" /> 
                                    <input type="hidden" name="amount" value="150.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[5]["product_id"]) ?>"> <?php echo $list_lated_product[5]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[5]['product_price']) ?> vnd</h5>                        
                        </div>
                        <div class="col-md-3 top-product-grids tp7">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[6]['product_id']) ?>"><div class="product-img">
                                <img style="height: 300px;" src="public/images/<?php echo $list_lated_product[6]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[6]['product_id'] . '&qty=1&price=' . $list_lated_product[6]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Inner Wear" /> 
                                    <input type="hidden" name="amount" value="100.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[6]["product_id"]) ?>"><?php echo $list_lated_product[6]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[6]['product_price']) ?> vnd</h5>                        
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="product/get_product_by_id/<?php echo($list_lated_product[7]['product_id']) ?>"><div class="product-img">
                                <img  style="height: 300px;" src="public/images/<?php echo $list_lated_product[7]['product_thumb'] ?>" alt="" />
                                <div class="p-mask">
                                <form action="<?= site_url('cart/cart/add?id=' . $list_lated_product[7]['product_id'] . '&qty=1&price=' . $list_lated_product[7]['product_price']) ?>" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="New Inner Wear" /> 
                                    <input type="hidden" name="amount" value="200.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4><a href="product/get_product_by_id/<?php echo($list_lated_product[7]["product_id"]) ?>"><?php echo $list_lated_product[7]['product_title'] ?></a></h4>
                            <h5><?php echo number_format($list_lated_product[7]['product_price']) ?> vnd</h5>                        
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

             
        <script src="<?= base_url() ?>/public/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });     
    </script>

<!-- // Service // -->
    <div class="fandt">
    <div class="container">
        <div class="col-md-6 features wow bounceInUp">
            <h3 class="wow ">Our Services</h3>
            <div class="support">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-user " aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>24/7 online free support</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shipping">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>Free shipping</h4>
                </div>  
                <div class="clearfix"></div>
            </div>
            <div class="money-back">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>100% money back</h4>
                </div>  
                <div class="clearfix"></div>                
            </div>
        </div>
        <div class="col-md-6 testimonials wow bounceInRight">
            <div class="test-inner">
                <div class="wmuSlider example1" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <img src="<?= base_url() ?>public/images/c1.png" alt=" " class="img-responsive" />
                                <p>Best Service I have ever seen. Very Fast</p>
                                <h4># Andrew</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <img src="<?= base_url() ?>public/images/c2.png" alt=" " class="img-responsive" />
                                <p>Hope that this website can develope more in the future</p>
                                <h4># Lucy</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="<?= base_url() ?>public/images/c3.png" alt=" " class="img-responsive" />
                                <p>Good Service and Best Quality of Product. I'm very satisfied with your Services </p>
                                <h4># Martina</h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
                <script src="<?= base_url() ?>public/js/jquery.wmuSlider.js"></script> 
                                <script>
                                    $('.example1').wmuSlider();         
                                </script> 
</div>
        <!-- // Service //                   -->
        <!-- newsletter -->

</body>
</html>