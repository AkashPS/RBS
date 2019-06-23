



<?php
include('owner_header.php');

$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{


?>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<script src="main.js"></script>

<!-- <style>

body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

h1,
h6 {
	font-family: 'Open Sans';
	font-weight: 300;
	text-align: center;
	position: absolute;
	top: 45%;
	right: 0;
	left: 0;
}
< <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Welcome Owner</h3>

                                <!-- DATA TABLE-->


								<?php
                                                foreach ($hotels as $row)
                                                 {
                                                $h_name=$row->hotel_name;
                                                $hid=$row->hotel_id;
                                                $pid=$row->p_id;
                                                $logid=$row->log_id;
                                                $add=$row->address;
                                                $con=$row->contact;
                                                $pin=$row->pincode;
                                                $logi=$row->longitude;
                                                $lati=$row->latitude;
                                                $img=$row->image;
												$dic=$row->discription;
												 }
                                                ?>





      <div class="col-lg-4">
        <div class="furniture_item">
          <form  action="<?php echo site_url("Ownerctrl/hotel_view");?>" method="post">

          <a href='<?php echo site_url().'/Ownerctrl/hotel_view/'.$hid; ?>'> <img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $img;?>" alt=""> </a>

          <h4><?php echo $h_name;?></h4>
          <p><?php echo $add;?></p>



          </form>

                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>



<?php
}else{
    $CI->index();
}

 include('owner_footer.php');
?>
  
