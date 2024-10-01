<?php 
	require('../config/db_config_define.php');
	require('../config/db_connection.php');
	require('include/login_header.php');
	$obj = new Database;
	print_r($obj->store_information()); die;
?>
<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(<?php echo _IMG_ADMIN_URL; ?>login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b><?php echo _SITE_TITLE; ?></h4>
					<!--<p>
						Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>-->
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Color</b> Admin
						<small>responsive bootstrap 4 admin template</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg" placeholder="Email Address" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" placeholder="Password" required />
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
						</div>
						 
						<hr />
						<p class="text-center text-grey-darker mb-0">
							&copy; Color Admin All Right Reserved 2019
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
 
	</div>

<?php 
	require('include/login_footer.php');
?>
