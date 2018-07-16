<div class="login">
		<div class="main-login">
				<div class="form-login">
					<h3>Register</h3>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="username" required="username"  placeholder="Username">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="email"  required="email"  placeholder="Email">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"  name="password"  required="password" id="password" placeholder="Password" onchange='check();' >
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="Confirm Password" required="Confirm Password" id="confirm_password" placeholder="Confirm Password" onchange='check();'>
							<div class="clearfix"></div>
						</div>
						<p id='message'><i></i></p>
						<input type="submit" class="btn btn-primary" data-dismiss="modal" name="btnadd" value="Add">
					</form>
				</div>
		</div>
</div>
<script>
	var check = function() {
		if(document.getElementById('password').value ===
			document.getElementById('confirm_password').value) {
			document.getElementById('message').innerHTML = "";
		} else {
			document.getElementById('message').innerHTML = "no match";
		}
	}
</script>