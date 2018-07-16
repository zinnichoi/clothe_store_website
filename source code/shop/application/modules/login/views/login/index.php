
 <body>
		<div class="main-login" style="margin: 3em auto;">
				<div class="form-login">
					<h3>Login</h3>
					<form action="<?php echo base_url()."login/login/login" ?>" method="post" id="form">
				<div><span class="success"><?php if(isset($b_Check) && $b_Check == false){echo "Invalid username or password";}?></span></div>
				<div>
					<label for="username">Username</label>
					<input class="form" type="text" name="username" required="username" value="<?php echo set_value('username'); ?>" size="40" />
					<span class="error"><?php echo form_error('username'); ?></span>
				</div>
				<div>
					<label for="password">Password</label>
					<input class="form" name="password" type="password" required="password" value="<?php echo set_value('password'); ?>" size="40" />
					<span class="error"><?php echo form_error('password'); ?></span>
				</div>
				<div><input type="submit" id="save" value="Log in" /></div>
			
		</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register/register/index" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script src="js/wow.min.js"></script>
	<script type="text/javascript">
		 new WOW().init();
	</script>
</body>