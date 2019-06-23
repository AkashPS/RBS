<?php
include('cust_header.php');
 ?>


<br><br>
<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                        <th>Hotel name</th>
                                                <th>Address</th>
                                                <th>Contact </th>
                                                <th>Description</th>
                                                <th ></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
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

                                            <tr>
                                                <td><h1><?php echo $h_name; ?></h1></td>
                                                <!-- <td><h1><?php echo $hid; ?></h1></td> -->
                                                
                                                <td><?php echo $add; ?></td>
                                                <td><?php echo $con; ?></td>
                                                <td ><?php echo $dic; ?></td>
                                               
                                               
                                                <form action="<?php echo site_url("Custctrl/hotel_view")?>"method="post" onsubmit="return" >
                                                <input type="hidden" name="hotelid" value="<?php echo $hid; ?>">
                                                <input type="hidden" name="image" value="<?php echo $img; ?>">
                                                <input type="hidden" name="addr" value="<?php echo $add; ?>">
                                                <input type="hidden" name="contact" value="<?php echo $con; ?>">
                                                <input type="hidden" name="desc" value="<?php echo $dic; ?>">
                                                <td ><input type="submit" id="view" class="btn btn-success" value="View" name="view"></td>
                                                </form>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>


									 </table>	
								</div>	 
							</div>	 
	</div>	 						



                        



 <?php
 include('cust_footer.php');
  ?>
