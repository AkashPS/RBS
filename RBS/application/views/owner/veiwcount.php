<?php

 $CI =&get_instance();
 $a=$CI->sessionin();
 $logid=$CI->logid();
 if($a==1)
 {
   include('Owner_header.php');


  ?>
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
  <div class="container">
    <div class="banner_content text-center">
      <h2>View your rooms</h2>
      <div class="page_link">
        <!-- <a href="index.html">Home</a>
        <a href="projects.html">Projects</a> -->
      </div>
    </div>
  </div>
      </div>
  </section>

  <section class="furniture_area p_120">
    <div class="container"><br><br>
      <div class="main_title">
        <h2>Choose your booking</h2>
      </div>
      <div class="furniture_inner row">

<br><br><br><br><br><br><br><br>
<div class="col-lg-4">
  <div class="furniture_item">
<br><br><br>


                                                  <div class="row">

                                                      <div class="col-md-12">
                                                          <!-- DATA TABLE -->
                                                          <h3 class="title-5 m-b-35">Avialable dates in that period of dat  es</h3>
                                                            <table class="table table-data2">



                                                                        <?php
                                                                        $a=array();
                                                                        $b=array();
                                                                        $i=0;
                                                                        foreach ($date as $key )
                                                                        {
                                                                          $a[$i]=$key;
                                                                          $i++;
                                                                        }
                                                                        $i=0;
                                                                        foreach ($count as $row)    //resultinte ullil orupad values und

                                                                        {
                                                                          foreach ($row as $row1)    //resultinte ullil orupad values und

                                                                          {
                                                                          $b[$i] =$row1->rooms;

                                                                        }
                                                                        $i++;
                                                                        }
                                                                        $s=$b[0];
                                                                        for ($i=0; $i <sizeof($a) ; $i++) {
                                                                          echo "<tr><td>" .$a[$i]. "  </td><td style='color:red';> " .$b[$i]. "</td></tr>";
                                                                          if($b[$i] < $s)
                                                                          {
                                                                            $s=$b[$i];
                                                                          }
                                                                        }
                                                                        echo $s;
                                                                        ?>
                                                            </table>
                                                      </div>
               <!-- <div>
                        <i><h1 style="color: #03aee9;"><b>CHECK YOUR ROOM!</h1></b></i>
                    <div class="form-group">
                                <div class="col-xs-6">

                                    <input type="date" id="txtFrom" name="txtFrom"  class="form-control" placeholder="To date" required>
                                </div>


                                 <div class="form-group">
                                     <div class="col-xs-6">
                                        <input type="date" id="txtTo" name="txtTo" class="form-control" onchange="return check1();" placeholder="From date" required>
                                    </div>
                                </div>
                      </div>
             </div> -->




             <form action="<?php echo site_url("Ownerctrl/hotel_block")?>"method="post" onsubmit="return" >

<input type="hidden" name="hotelid" value="<?php echo $hid; ?>">
<input type="hidden" name="hotelid" value="<?php echo $hid; ?>">
<input type="hidden" name="hotelrmid" value="<?php echo $hrmid; ?>">

<input type="hidden" name="logid" value="<?php echo $logid; ?>">


<input type="hidden" name="roomrate" value="<?php echo $roomrate; ?>">
<input type="hidden" name="checkin" value="<?php echo $s_date; ?>">
<input type="hidden" name="checkout" value="<?php echo $e_date; ?>">


                                <div class="card">
                                    <div class="card-header" align="center">
                                        <strong>Book your</strong> room
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="has-success form-group">
                                        <input type="date" id="txtFrom" name="txtFrom" value="<?php echo $s_date; ?>" disabled class="is-valid form-control-success form-control"placeholder="To date" required>
                                       
                                   </div>


                                         <input type="date" id="txtTo" name="txtTo" value="<?php echo $e_date; ?>" disabled class="is-invalid form-control" onchange="return check1();" placeholder="From date" required>

                                        </div>
                                        <div class="has-warning form-group">
                                        <div class="col col-md-3">
                                          <select class=" form-control-label" name="norm">
                                          
                                            <option value="">Select number</option>
                                            <?php
                                            for($i=1;$i<=$s;$i++)
                                            {
                                              ?>
                                              <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php
                                            }
                                             ?>
                                          </select>
                                          </div>
                                    </div>
                                  
                                    <button type="submit" id="book" name="book"class="btn btn-outline-primary">Book</button>
                                   

                                     
                                </div>
                    </form>
                                



                    </div>
                    </div>


                    </div>
                    </div>
                    </section>


<?php
include('Owner_footer.php');
}else{
    $CI->login();
}
  ?>
