<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo url('assets/login/'); ?>/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/login/'); ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body  style="background:url('<?php echo url('assets/background.png'); ?>'); background-size:cover;">

<div style="position:fixed; z-index:10; width:100%; height:100%; background:rgba(50,50,50,0.6);"></div>

<div style="position:absolute; z-index:2000; width:100%; height:100%; top:0; left:0;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background:#177076;">
					
					<img src="<?php echo url('/'); ?>/assets/ipaymu_logo_white_240x60.png"  alt="homepage" style="width:200px; margin:auto;" />

					<p>&nbsp;</p>

					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" onsubmit="checklogin(this); return false;">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					{{ csrf_field() }}

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> -->

					<div class="container-login-form-btn" style="width:100%;">
						<button class="login100-form-btn" type="submit" style="float:right; background:#177076;">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo url('assets/login/'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo url('assets/login/'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('assets/login/'); ?>/js/main.js"></script>

	<script type="text/javascript">

	function checklogin(form){

			$.ajax({
				type:"post",
				url:"<?php echo url('runlogin'); ?>",
				data:$(form).serialize(),
				dataType:"json",
				success:function(data){

				  if(data.status == "success"){
				  	 window.location="<?php echo url('administrator/home'); ?>";
				  }
				  else{
				  	alert("Username Atau Password Salah");
				  }

				}
			})
			
	}

	$(document).ready(function(){


	});
	</script>

</body>
</html>