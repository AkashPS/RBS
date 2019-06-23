<?php
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
  include('owner_header.php');

 ?>
 <?php
 foreach($hotel as $row)
 {


 $h_id=$row->hotel_id;
$proid=$row->p_id;

  $h_name=$row->hotel_name;
  $h_add=$row->address;
  $h_con=$row->contact;
 $h_img=$row->image;
  $h_desc=$row->discription;
}
 ?>
 <br><br><br><br>
 <section class="portfolio_details_area p_120">
         	<div class="container">
         		<div class="portfolio_details_inner">
 					<div class="row">
 						<div class="col-md-6">
 							<div class="left_img">
 								<img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $h_img; ?>" alt="">
   							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="portfolio_right_text">
 								<h4><?php echo $h_name; ?></h4>
 								<p><?php echo $h_add; ?><br>Contact: <?php echo $h_con; ?><br>About: <?php echo $h_desc; ?></p>
 								<ul class="list">
 										<li><span>  <input type="hidden" name="hotelid" value="<?php echo $h_name; ?>"></span></li>
 								</ul>
              <form method="post" action="<?php echo site_url('Ownerctrl/hotel_bookings'); ?>">
              <input type="hidden"  name="hotelid" value="<?php echo $h_id; ?>">
                <input type="submit" class="btn btn-outline-success btn-sm" value="view bookings" >
 					</form>

          <form method="post" action="<?php echo site_url('Ownerctrl/booking_total'); ?>">
          <input type="hidden"  name="hotelid" value="<?php echo $h_id; ?>">
            <input type="submit" class="btn btn-outline-success btn-sm" value="Total Amount" >
      </form>
                             </div>
 						</div>


                                            <table >
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <!-- <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label> -->
                                                                </th>
                                                                <th>Room Type</th>
                                                                <th>Total rooms</th>
                                                                <th>rate per day</th>

                                                                <th></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                                  <?php foreach($hotels as $row)
                                                                {
                                                                $rtypid=$row->r_id;
                                                                $roomtype=$row->r_type;
                                                                $no_of_room=$row->no_of_room;
                                                                $rate=$row->rate;
                                                                 ?>
                                     <form action="<?php echo site_url("Ownerctrl/hotel_booking")?>"method="post" onsubmit="return" >

                                                                    <tr class="tr-shadow">
                                                                            <td>

                                                                            </td>
                                                                            <td><?php echo $roomtype; ?></td>
                                                                            <td>
                                                                                <span class="block-email"><?php echo $no_of_room; ?></span>
                                                                                <!-- <h1><?php echo $rtypid; ?></h1> -->
                                                                            </td>

                                                                            <td class="desc"><?php echo $rate; ?></td>


                                                                            <td>
                                                    <input type="hidden"  name="hotelid" value="<?php echo $h_id; ?>">
                                                    <input type="hidden" name="hotelrmid" value="<?php echo $rtypid; ?>">
                                                    <input type="hidden" name="roomrate" value="<?php echo $rate; ?>">
                                                                                    <div class="card-body">
                                                                                    <button type="submit"id="view"  name="view" class="btn btn-success btn-lg active">check room</button>

                                                                                    </div>

                                                                                </div>
                                                                            </td>
                                                                        </tr>


                                                                        </form>

                                                                        <?php } ?>
                                                        </tbody>
                                            </table>


 					<!-- </div>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
        				<p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
         		</div> -->

         	</div>
         </section>
 <?php
 include('owner_footer.php');
 }else{
     $CI->login();
 }

  ?>
