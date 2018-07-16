

<div class="container">
    <h1 class="wow bounceInUp"> News Detail </h1>
            <div class="col-md-9 btm-wthree-left">
                <div class="single-left">
                <div class="single-left1">
                    <img src="<?= base_url() ?>/public/images/<?php echo $post['post_thumb'] ?>" alt=" " class="img-responsive" />
                    <h3><?php echo $post['post_title'] ?></h3>
                    <ul>
                        <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="home">Michael Smith</a></li>
                        <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="home">5 Tags</a></li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="home">5 Comments</a></li>
                    </ul>
                    <p><?php
                        echo $post['post_detail'];
                        ?></p>
                </div>
                <div class="admin">
                    <p>But I must explain to you how all this mistaken idea of denouncing 
                        pleasure and praising pain was born and I will give you a complete 
                        account of the system, and expound the actual teachings of the great 
                        explorer of the truth, the master-builder of human happiness. 
                        No one rejects, dislikes, or avoids pleasure itself.</p>
                    <a href="home"><i>John Frank</i></a>
                </div>
            </div>

            </div>
            <!-- //btm-wthree-left -->
                <!-- btm-wthree-right -->
            <div class="col-md-3 w3agile_blog_left">                
                <div class="agileinfo_calender">
                <h3>CONNECT SOCIALLY</h3>
                <div class="w3ls-social-icons-1">
                    <a class="facebook" href="home"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="home"><i class="fa fa-twitter"></i></a>
                    <a class="pinterest" href="home"><i class="fa fa-pinterest-p"></i></a>
                    <a class="linkedin" href="home"><i class="fa fa-linkedin"></i></a>
                    <a class="linkedin" href="home"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" href="home"><i class="fa fa-rss"></i></a>
                </div>
                </div>
                <div class="w3ls_popular_posts">
                    <h3>Popular Posts</h3>
                    <div class="agileits_popular_posts_grid">
                        <div class="w3agile_special_deals_grid_left_grid">
                            <a href="home"><img src="<?= base_url() ?>public/images/p1.jpg" class="img-responsive" alt="" /></a>
                        </div>
                        <h4><a href="home">Tellus Faucibus Eleifend Sit Amet</a></h4>
                        <h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
                    </div>
                    <div class="agileits_popular_posts_grid">
                        <div class="w3agile_special_deals_grid_left_grid">
                                <a href="home"><img src="<?= base_url() ?>public/images/p2.jpg" class="img-responsive" alt="" /></a>
                            </div>
                        <h4><a href="home">Mauris Ut Odio Sed Nisi Convallis</a></h4>
                        <h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
                    </div>
                    <div class="agileits_popular_posts_grid">
                        <div class="w3agile_special_deals_grid_left_grid">
                                <a href="home"><img src="<?= base_url() ?>public/images/p3.jpg" class="img-responsive" alt="" /></a>
                        </div>
                        <h4><a href="home">Curabitur A Sapien Et Tellus Faucibus</a></h4>
                        <h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
                    </div>
                </div>
            <!-- //btm-wthree-right -->
            <div class="clearfix"></div>
        </div>
    </div>