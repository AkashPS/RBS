



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

< <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Welcome Owner</h3>

                                <!-- DATA TABLE-->


								<?php

								if($val==1)
								{
                                  ?>            





      <div class="col-lg-4">
        <div class="furniture_item"> 
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
        
       ?>
          <form  action="<?php echo site_url("Ownerctrl/hotel_view");?>" method="post">

          <a href='<?php echo site_url().'/Ownerctrl/hotel_view/'.$hid; ?>'> <img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $img;?>" alt=""> </a>


		  <input type="hidden" name="hotelid" value="<?php echo $hid;?>">



		  <h4><?php echo $h_name;?></h4>

          <p><?php echo $add;?></p>



          </form>
				<?php
			}}
				else {
					?>
					<h4 class="title-5 m-b-35">No hotels</h4>
					<?php

				}
				 ?>

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
