<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Arlo HTML 5 Template</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/plugins.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" /></head>


<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0f0f3d;
}

li {
  float: right;
	list-style:none;
}


li a:hover {
  background-color: #111;
}

.avatar {

  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
} 	

.logoutLblPos{

position:fixed;
left:10px;
top:5px;
}
</style>


<body>

<div>
<ul>

<img src="<?php echo base_url(); ?>img/core-img/user.png" alt="Avatar" class="avatar">	




<li>
	<a class="active" href="#home">Home</a></li>
  <li><a href="#news">contact</a></li>
	<li><a href="<?php echo site_url('Rbsctrl/accomadation') ?>">Accommodation</a></li>
  <li><a href="#about">Home</a></li>
  </ul>




</div>

<!-- WRAPPER ALL -->
<div class="arlo_tm_wrapper_all">

	<div id="arlo_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>

	<!-- PRELOADER -->
	<div class="arlo_tm_preloader">
		<div class="spinner_wrap">
			<div class="spinner"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	<!-- MOBILE MENU -->
	<div class="arlo_tm_mobile_header_wrap">
		<div class="main_wrap">
			<div class="logo">
				<img src="<?php echo base_url();?>img/logo/mobile_logo.png" alt="" />
			</div>
			<div class="arlo_tm_trigger">
				<div class="hamburger hamburger--collapse-r">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

			<div class="rightpart_inner">
				<div class="arlo_tm_section" id="home">
					<div class="arlo_tm_hero_header_wrap">
						<div class="arlo_tm_universal_box_wrap">
							<div class="bg_wrap">
                                <div class="overlay_image hero jarallax" data-speed="0.1"></div>
								<div class="overlay_color hero"></div>
							</div>
							<div class="content hero">

							</div>
							<div class="arlo_tm_arrow_wrap bounce anchor">
								<a href="#about"><i class="xcon-angle-double-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	<a class="arlo_tm_totop" href="#"></a>

	</div>
	
</body>
</html>

