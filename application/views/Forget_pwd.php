<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
.input10{
  font-family: Raleway-SemiBold;
  font-size: 18px;
  line-height: 1.2;
  color: #686868;

  display: block;
  width: 100%;
  background: #e6e6e6;
  height: 62px;
  border-radius: 3px;
  padding: 0 10px 0 20px;
}
</style>
<body>
<br>
	<div class="limiter">
		<div class="container-login10">
			

			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-50" >
				<!--form class="login100-form "-->
					<span class="login100-form-title p-b-10"><br>
						Forget Password
					</span>

						
						 <?php
		   					//echo form_open('Forgot_pwd_controller');
		  					// echo validation_errors();
		   					//if (isset($success))
							  // echo '<p>'.$success.'</p>';
		   						echo $this->session->flashdata('success');
						 ?>
						

					<div ><!--?php echo $this->session->flashdata('success');?--> </div>	


					<div class="wrap-input100  p-t-15" >
						<span class="label-input100">Email</span>
						<input class="input10" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 p-t-15" >
						<span class="label-input100">New Password</span>
						<input class="input10" type="Password" name="new_pwd" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 p-t-15" >
						<span class="label-input100">Confirm Password</span>
						<input class="input10" type="Password" name="confirm_pwd" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
				

					<div class="flex-m w-full p-b-10  p-t-15">

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btnpwd">
								Done
							</button>
						</div>

						<a href="" class="dis-block txt20 hov1 p-r-30 p-t-10 p-b-10 p-l-30"  data-toggle="modal" data-target="#myModal">
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
	