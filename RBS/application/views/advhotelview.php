
<?php
include('admin_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>
<?php

  foreach($data as $row)
  {
    //   $fname=$row->fullname;
    //   $addr=$row->address;
    //   $con=$row->contact;
    //   $img=$row->image;
    //   $hotelid=$row->h_id;
$hid=$row->hid;
$aadhaar=$row->aadhaar;
$fullname=$row->fullname;
$fname=$row->father_name;
$gender=$row->gender;
$owneradd=$row->owner_add;
$village=$row->village;
$taluk=$row->taluk;

$pincode=$row->pincode;
$mobile=$row->mobile;
$email=$row->email;
$hotelname=$row->hotel_name;
$hoteladd=$row->hotel_add;
$hotelvillage=$row->hotel_village;
$hoteltaluk=$row->hotel_taluk;

$hotellocarea=$row->hotel_locarea;
$hotelpincode=$row->hotel_pincode;
$hotelarea=$row->hotel_area;
$hotelowner=$row->hotel_owner;
$hotellicenseno=$row->hotel_license_no;
$owneridproof=$row->owner_id_proof;
$hotellicense=$row->hotel_license;
     
            ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Application for Hotel :</strong> Applicant Details
                                        
                                    </div>
                                 <div class="card-body card-block">
<form action=<?php echo site_url("Rbsctrl/hotelblockadm")?> method="post" enctype="multipart/form-data" class="form-horizontal">

<input type='hidden' name='bhid' value="<?php echo $basichid; ?>">
<input type='hidden' name='bhid' value="<?php echo $bstatus; ?>">
<?php $bstatus=$bstatus;  ?>




                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Aadhaar Number</label>
                                                   
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="adhar" name="adhar" class="form-control" readonly value="<?php echo  $aadhaar;  ?>" >
                                  
                                                </div>
                                              
                                        </div>


                                    </div>


										    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" readonly class="form-control"  value="<?php echo  $fullname;  ?>">
                                                   
                           
                                                </div>
                                             

                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father’s Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fathername" name="fathername" readonly class="form-control"value="<?php echo  $fname;  ?>" >
                                                   
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Gender </label>
                                                </div>
                                                <div class="col col-md-9">
                                                <input type="text" id="gender" name="gender"  class="form-control" readonly value="<?php echo  $gender;  ?>" >
                                                   
                                                   
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Postal Address</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                <textarea name="hoteladdress" id="hoteladdress" cols="30" rows="5"disabled><?php echo  $owneradd;  ?></textarea>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="village" name="village"  class="form-control"  readonly value="<?php echo  $village;  ?>" >
                                                 
                                                </div>
                                               



                                        <br><br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="taluk" name="taluk" class="form-control" readonly value="<?php echo  $taluk;  ?>" >
                                                  
                                                </div>

    


<br><br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                  
                                                <input type="text" id="state" name="state" class="form-control" readonly value="<?php echo  $state;  ?>" >
                                                  

                                        
                                                </div>
                                                <br> <br>
                                                
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                  
                                                <input type="text" id="district" name="district" class="form-control" readonly value="<?php echo  $district;  ?>" >
                                                  

                                        
                                                </div>
                                                <br> <br>
                                              
                                                <div class="col col-md-3">

                                                </div>
                                                
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="pinode" name="pinode"  class="form-control" readonly value="<?php echo  $pincode;  ?>"  >
                                                    
                                                </div>
                                               
                                            </div>


    <br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Mobile No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobile" name="mobile"  class="form-control" readonly value="<?php echo  $mobile;  ?>" >
                                                    
                                                </div>
                                            </div>
                                           
<br>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email" name="email"  class="form-control"readonly value="<?php echo  $email;  ?>" >
                                                  
                                                </div>
                                            </div>





                                    </div>





                                </div>
                            </div>





                            <div class="col-lg-6">
                                <div class="card">
                                     <div class="card-header">
                                        <strong>Details for the</strong> License
                                    </div>
                                    <div class="card-body card-block">

                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Name of the Hotel</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelname" name="hotelname" class="form-control" readonly value="<?php echo  $hotelname;  ?>" >
                                                    
                                                </div>
                                            </div>
                                           


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Postal Address of hotel</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                <textarea name="hoteladdress" id="hoteladdress" cols="30" rows="5"disabled><?php echo  $hoteladd;  ?></textarea>
                 
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelvillage" name="hotelvillage" class="form-control"readonly value="<?php echo  $hotelvillage;  ?>" >
                                                 
                                                </div>
                                                <br><br>
                                               
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hoteltaluk" name="hoteltaluk" class="form-control"readonly value="<?php echo  $hoteltaluk;  ?>" >
                                                    
                                                </div>
                                                <br><br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelstate" name="hotelstate" class="form-control"readonly value="<?php echo  $hstate;  ?>" >
                                                    
                                                </div>
                                                <br><br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hoteldistrict" name="hoteldistrict" class="form-control"readonly value="<?php echo  $hdistrict;  ?>" >
                                                    
                                                </div>
                                                <br><br>
                                             
                                               

</div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Area of Hotel(Yards/Sq.
                                                    Metres/Acres/
                                                    Hectares)</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotelarea" name="hotelarea" class="form-control"readonly value="<?php echo  $hotelarea;  ?>" >
                                                
                                                </div>
                                            </div>
                                            


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Name of  owner of
                                                    the land
                                                    </label>
                                                </div>

                                                
                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotellicense" name="hotellicense"  class="form-control" readonly value="<?php echo  $hotelowner;  ?>" >
                                                 </div>
                                            </div>

                                            


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">License Number of the license
                                                    obtained from Gov: authority
                                                    </label>
                                                </div>


                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotellicense" name="hotellicense"  class="form-control" readonly value="<?php echo  $hotellicenseno;  ?>" >
                                                 </div>
                                            </div>

                                            <div class="row">
                                            <div>
                                            <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModal">
									      ID Proof property lisence Proof  
										</button></div> &nbsp;  &nbsp; 
                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModal1">
                                        ID Proof
										</button></div>
<br><br>

                                        
                                        
                                    </div>
                                </div>
                            </div> 

                           <?php if($bstatus==1)
                           { ?>

                            <div class="card-footer">
                                      <button type="submit" class="btn btn-danger btn-lg active" id="submit" name="submit">
                                                Block
                                      </button>
                            </div>

                         <?php 
                           }
                           else
                           {
                        ?>
                                <div class="card-footer">
                                      <button type="submit" class="btn btn-danger btn-lg active" id="submit1" name="submit1">
                                                Unblock
                                      </button>
                        <?php   }?>
                            
                                   
                                </div>
                               </form>

                            </div>
                            </div>
                            </div>
                            </div>

<?php

}
  ?> 


<?php
include('admin_footer.php');
?>
<!-- modal large -->
<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<img class="img-fluid" src="<?php echo base_url(); ?>/images/hotel/<?php echo $owneridproof; ?>" alt=""></td>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal large -->

            !-- modal large -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<img class="img-fluid" src="<?php echo base_url(); ?>/images/hotel/<?php echo $hotellicense; ?>" alt=""></td>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal large -->
<?php
}
?>