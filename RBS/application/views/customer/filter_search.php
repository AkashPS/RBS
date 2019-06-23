<?php


$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
  include('Rbs_header.php');
?>
<!--================Furniture Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
<div class="container">
  <div class="banner_content text-center">
    <h2>Hotels</h2>
    <div class="page_link">
      <!-- <a href="index.html">Home</a>
      <a href="projects.html">Projects</a> -->
    </div>
  </div>
</div>
    </div>
</section>
<section class="furniture_area p_120">
  <div class="container">
  <div >
  <form action="<?php echo site_url("Custctrl/filter")?>"method="post" onsubmit="return" >
  <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-toggle="modal" data-target="#mediumModal">filter</button>
  <!-- <button type="submit" name="submit" id="submit"class="btn btn-outline-warning btn-lg btn-block" >filter</button></div> -->
  </form>
    <div class="main_title">
      <h2>Most Popular Hotels</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="furniture_inner row">
      <?php
                                                foreach ($hotel as $row)
                                                 {
                                                $h_name=$row->hotel_name;
                                                $hid=$row->h_id;
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





      <div class="col-lg-4">
        <div class="furniture_item">
          <form  action="<?php echo site_url("Custctrl/hotel_view");?>" method="post">

      <a href='<?php echo site_url().'/Custctrl/hotel_view/'.$hid; ?>'> <img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $img;?>" alt=""> </a>
          <h4><?php echo $h_name;?></h4>
          <p><?php echo $add;?></p>
         



          </form>
        </div>
      </div>


                                                    <?php
                                                         }
                                                         ?>
    </div>
  </div>
</section>
<?php


include('Rbs_footer.php');

?>
<!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<form action="<?php echo site_url("Custctrl/filtersearch"); ?>"method="post" onsubmit="return" >
<table>
<tr>
<td>

<select name="state" id="state" onchange="Sel_district();" required>
<option value="">Select State</option>
                                            <?php
                                            foreach($state as $row)
                                                {?>
                                                <option value="<?php echo $row->id; ?>"> <?php echo $row->sname; ?></option>
                                                <?php
                                                    
                                                }
                                                ?>
</select></td> <td>
  <label for="shop">District</label>
  <select name="district" id="district" required> 
  <option value="">Select district</option>                                          
</select>
<script src="<?php echo base_url(); ?>vendor/jquery-3.2.1.min.js"></script>
<script>

                                            function Sel_district()
                                            {
                                                var state=document.getElementById('state').value;
                                                // alert(state);
                                                var data=new FormData();
                                                data.append('state',state);
                                                    $.ajax({
                                                    method:'post',
                                                    url:"<?php echo site_url("Custctrl/sel_district1"); ?>",
                                                    processData: false,
                                                    contentType: false,
                                                    data: data,
                                                    success:function(result){
                                                        // alert(result);
                                                        var r=JSON.parse(result);
                                                            // alert(r[0].id);
                                                            $('#district').html("<option value=0>"+"Select District"+"</option>");

                                                            for(i=0;i<r.length;i++){
                                                                $('#district').append("<option value="+r[i].id+">"+r[i].name+"</option>");
                                                            }
                                                                //$('#district').append("<option value="+result+">"+result+"</option>");
                                                                //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
                                                                }
                                                });
                                                
                                                
                                            }

                                            </script>

</td>&nbsp &nbsp

</tr>

</table>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <input type="submit" name="submit" id="submit" placeholder="search" class="btn btn-outline-success btn-lg">						</div>
              </form>
          </div>
				</div>
			</div>
			<!-- end modal medium -->
<?php
}else{
    $CI->login();
}

 ?>
