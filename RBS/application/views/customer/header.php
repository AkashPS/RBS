
<!DOCTYPE html>
<html lang="en">

<!--photo-timeline.html 18:00:16 GMT -->
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta charset="UTF-8">
<meta name="description" content="Practo - The Ultimate Multipurpose Admin Template">
<meta name="keywords" content="Practo, Admin, Template, Bootstrap">
<title>Bethlehem </title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
<link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/material-design-iconic-font.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/lightgallery.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
</head>

<body>
<style>
#myInput {
  /* background-image: url('../images/searchicon.png'); */
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 20px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left:105px;
  margin-right:5px;

}
</style>

<header  id="header" class="clearfix" data-spy="affix" data-offset-top="65">
  <ul  class="header-inner">
    
    <!-- Logo -->
    <li style='background-color:black;'class="logo"> <a href="index.php"><img src="<?php echo base_url(); ?>img/logo11.png" alt="Practo"></a>
      <div id="menu-trigger"><i class="jtv jtv-menu"></i></div>
    </li>
    
    <!-- Messages -->
   
   
    
    <!-- Settings -->
    <!-- <li class="pull-right dropdown hidden-xs"> <a href="#" data-toggle="dropdown"> <i class="jtv jtv-more-vert"></i> </a>
      <ul class="dropdown-menu">
        <li><a data-toggle="fullscreen" href="#">Toggle Fullscreen</a></li>
       
      </ul>
    </li> -->
    

    <!-- Time -->
    <!-- <li class="pull-right hidden-xs">
      <div id="time"> <span id="t-hours"></span> <span id="t-min"></span> <span id="t-sec"></span> </div>
    </li> -->
  </ul>
</header>
<aside style='background-color:black;'  id="sidebar"> 
  
  <!--| MAIN MENU |-->
  <ul class="side-menu">
    <li class="sm-sub sms-profile"> <a class="clearfix" href="#"> <img src="<?php echo base_url(); ?>img/profile-pic.jpg" alt=""> <span class="f-11"> <span class="d-block">USER</span> <small class="text-lowercase"></small></span> </a>
    </li>
    <li > <a  href="index.php"> <i class="jtv jtv-home"></i> <span>Home</span> </a> </li>
    <li > <a  href="profile.php"> <i class="jtv jtv-home"></i> <span>View Profile</span> </a> </li>
    <li> <a href="resort.php"> <i class="jtv jtv-calendar"></i> <span>resort </span> </a> </li>
   
    <li> <a href="calendar.php"> <i class="jtv jtv-calendar"></i> <span>Calendar </span> </a> </li>
    <li> <a href="viewbookings.php"> <i class="jtv jtv-calendar"></i> <span>View Bookings </span> </a> </li>
    <li> <a href="changepassword.php"> <i class="jtv jtv-calendar"></i> <span>change password </span> </a> </li>

    <li> <a href="../signout.php"> <i class="jtv jtv-calendar"></i> <span>Logout </span> </a> </li>




    
  </ul>
</aside>
</body>

</html>