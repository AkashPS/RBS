
<?php
include('admin_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>


<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Hotel list</h3>

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
  <tr >
    
    <th>Hotel name</th>
    <th>Hotel Address</th>
    <th>Contact</th>
    <th>Image</th>
  


  </tr>
  </thead>
  <tbody>
<?php
  $i=1;
//   `hotel_id``h_id``p_id``log_id``hotel_name``address``contact``pincode``longitude``latitude``image``discription`
  foreach($data as $row)
  {
      $hname=$row->hotel_name;
      $addr=$row->address;
      $con=$row->contact;
      $img=$row->image;
      $hotelid=$row->h_id;
      $basichid=$row->hotel_id;
      $bstatus=$row->status;

    
     
            ?>

            <form action="<?php echo site_url("Rbsctrl/adv_htlview")?>" method="post">
            <input type='hidden' name='hotelid' <?php echo "value='$hotelid'"; ?>>   
            <input type='hidden' name='basichid' <?php echo "value='$basichid'"; ?>>  
            <input type='hidden' name='bstatus' <?php echo "value='$bstatus'"; ?>>  
            <?php
                    
                            
                                      
                                        echo "<td>".$hname."</td>";
                                        echo "<td>".$addr."</td>";
                                        echo "<td>".$con."</td>";
                                        
                                    
                                        ?>
   						             	            <td><img class="img-fluid" src="<?php echo base_url(); ?>images/home/<?php echo $img; ?>" alt=""></td>
                                          <?php
      
                                                
                                        echo "<td><input type='submit' name='submit' class='btn btn-success' value='view'></td>  ";
                                        

                                        echo "</tr>";
                                        
                            
            ?>
             
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
include('admin_footer.php');
}
?>
