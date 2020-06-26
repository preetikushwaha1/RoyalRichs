<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>


<br>	
	<div class="limiter">
		<div class="container-login10">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-50" style="top:70px;">
				<!--form class="login100-form " action="<?php //echo site_url('Signup_body_controller/registration');?>" 
					method="post"-->
					<span class="login100-form-title p-b-10"><br>
						Sign Up
					</span>
					  <?php
		   					echo form_open('Signup_body_controller/Registration');
		  					 echo validation_errors();
		   					if (isset($success))
							   echo '<p>'.$success.'</p>';
						 ?>


					<div class="wrap-input100" >
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="full_name" id="full_name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email"  id="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100" >
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="usr_name" id="usr_name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phone_no" id="phone_no" placeholder="Phone Number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Password</span>
						<input class="input100" type="Password" name="pwd"  id="pwd" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="Password" name="confirm_pwd" id="confirm_pwd" 
						placeholder="*************">
						<span class="focus-input100"></span>
					</div>
				

					<div class="flex-m w-full p-b-10  p-t-15">

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signup_btn">
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt20 hov1 p-r-30 p-t-10 p-b-10 p-l-30"  data-toggle="modal" data-target="#myModal">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>	
					</div>

				</div>
					<?php 
						echo form_close(); 
					?>
				<!--/form-->
			</div>
		</div>
	</div>
	