
<?php
include('header.php');
?>
<section id="content">
  <div class="container">
  
    <div class="tile">
    <br>
    <input type="text" id="myInput" placeholder="Search for names.." title="Type in a name">

      
        <div class="row">
        <?php
                                                  foreach ($hotel as $row)
                                                   {
                                                  $h_name=$row->hotel_name;
                                                  $hid=$row->hotel_id;
                                                  $pid=$row->p_id;
                                                  $logod=$row->log_id;
                                                  $add=$row->address;
                                                  $con=$row->contact;
                                                  $pin=$row->pincode;
                                                  $logi=$row->longitude;
                                                  $lati=$row->latitude;
                                                  $img=$row->image;
                                                  $dic=$row->discription;
                                                  ?>

                   
                        <div class="col-md-4 col-sm-6 col-xs-12" id="myDIV">
                            <div class="post-wrapper clearfix border-bottom">
                                <div class="hotel-wrapper">
                                    <div class="post-media">
                                    <a href="#"> <img style='width:700px;max-height:180px;'  src="<?php echo base_url(); ?>images/home/<?php echo $img; ?>" alt="" class="img-responsive"></a>
                                    </div><!-- end media -->
                                    <div class="post-title clearfix">
                                        <div class="pull-left">
                                        <h5><?php echo  $h_name; ?></h5>
                                        </div><!-- end left -->
                                                    
                                    </div><!-- end title -->
                                    <p><?php echo  $add; ?></p>
                                    <p><?php echo  $con; ?></p> 
                                </div><!-- end hotel-wrapper -->                            
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                       
<?php
                                                   }
                                                   ?>
              

        </div><!-- end row -->

      </div>
    </div>
  </div>
</section>
<?php
include('footer.php');
?>