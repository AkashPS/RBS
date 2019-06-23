<?php

 $CI =&get_instance();
 $a=$CI->sessionin();
 $logid=$CI->logid();
 if($a==1)
 {
   include('Rbs_header.php');
  ?>


<br><br><br><br><br><br><br><br><br>



<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">YOUR ROOM BOOKING DETAILS</h3>

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
  <tr >
    <th>Sr No</th>
    <th>Hotel Name</th>
    <th>Hotel Image</th>
    <!-- <th>Room type</th> -->
    <th>Checkin date</th>
    <th>checkout date</th>
    <th>Payed amount</th>
    <th>Action</th>


  </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  foreach($res as $row)
  {
  $bookid=$row->bokid;
  $sdate=$row->startdate;
  $edate=$row->enddate;
  $hname=$row->hotel_name;
  $amount=$row->amount;
  $img=$row->image;
  

?>

            <form action="<?php echo site_url("Custctrl/cancelbook")?>" method="post">
            <input type='hidden' name='bhid' value="<?php echo $bookid; ?>">
            <input type="hidden" name="hotelid" value="<?php echo   $this->session->userdata('id'); ?>">
            <?php
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>" .$row->hotel_name."</td>";
?>
<td><img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $img; ?>" alt=""></td>
<?php


echo "<td>" .$row->startdate."</td>";
echo "<td>" .$row->enddate."</td>";
echo "<td>" .$row->amount."</td>";
echo "<td>"."<input type='hidden' name='bhid' value=$bookid>"."</td>";
echo "<td>"."<button type='submit' name='cancel'>cancelbooking</buton>"."</td>";
// echo "<td>" ."<button type='button' class='btn btn-secondary mb-1' data-toggle='modal' data-target='#smallmodal'>
// Print
// </button>"."</td>";
// echo "<tr>";
                    $i++; ?>
            </form>
    <?php

  }
    ?>
</tbody>
</table>

</div>
</div>
</div>




<?php
include('Rbs_footer.php');
?>
	<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
            <input type='hidden' name='bhid' value="<?php echo $bookid; ?>">
				</div>
			</div>
     
      <?php
}else{
    $CI->login();
}
  ?>
