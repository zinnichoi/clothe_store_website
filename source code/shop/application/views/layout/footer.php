    <?php $sess = $this->session->userdata('user'); ?>

<div class="footer wow bounceIn data-wow-delay=".5s">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1 text-center">
        <a href="home"><img src="<?= base_url() ?>/public/images/logo.png" alt=" " /><h3>LALA<span>STORE</span></h3></a>
        
        </div>
        <div class="col-md-3 footer-grids fgd2 text-center">
            <h4>Address</h4> 
            <ul>
            <li>264 Nguyen Trai, Thanh Xuan</li>
            <li>Ha Noi, Viet Nam.</li>
            <li><a href="mailto:info@example.com">info@example.com</a></li>

            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>
            
        </div>
        <div class="col-md-3 footer-grids fgd3 text-center">
            <h4>Information</h4> 
            <ul>
                <li><a href="contact/contact/insert">Contact Us</a></li>
                <li><a href="post/post/index">News</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4 text-center">
            <h4>My Account</h4> 
            <ul>
                <?php if(empty($sess)){ 
                echo '<li><a href="login/login">Login</a></li>';
                echo '<li><a href="register/register">Register</a></li>';
                  } ?>
                  <?php if(!empty($sess)){ 
                echo '<li><a href="login/logout">Logout</a></li>';
                  }?>
                <li><a href="home">Recommended </a></li>
                <li><a href="home">Payments</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        
    </div>
</div>
    <script src="<?= base_url() ?>public/js/wow.min.js"></script>
    <script type="text/javascript">
         new WOW().init();
    </script>
    


<