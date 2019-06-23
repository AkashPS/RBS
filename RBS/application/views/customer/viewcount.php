<?php

 $CI =&get_instance();
 $a=$CI->sessionin();
 $logid=$CI->logid();
 if($a==1)
 {
   include('Rbs_header.php');


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
    <div class="container">
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
                                                          <h3 class="title-5 m-b-35">Avialable dates in that period of daes</h3>
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
                                                                          echo "<tr><td>".$a[$i]." </td><td style='color:red';> ".$b[$i]."</td></tr>";
                                                                          if($b[$i] < $s)
                                                                          {
                                                                            $s=$b[$i];
                                                                          }
                                                                        }
                                                                        echo $s;
                                                                        ?>
                                                            </table>
                                                      </div>
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



             <form action="<?php echo site_url("Custctrl/payment")?>"method="post" onsubmit="return" >



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
                                        <div align="center">
                                        <div class="has-warning form-group" >


                                         <select onchange="rate(this.value)" class="" name="no_of_room"id="roomCount" required>
                                            <option value="">Select number</option>
                                            <?php
                                            for($i=1;$i<=$s;$i++)
                                            {
                                              ?>
                                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php
                                            }
                                             ?>
                                          </select>
                                    </div> </div><br> Total ammount
                                    <input type="text" id="trate" name="trate" readonly class="is-invalid form-control" ><br>

                                    <button type="submit" class="btn btn-outline-primary">Book</button></div><br>
                                  
                                        <div align="center"><a href="<?php echo site_url("Custctrl/home1"); ?>" >
                                             <button type="button" class="btn btn-outline-primary">Cancel</button></a>
                         
                                          <div>




                                         
                                <input type="hidden" name="datefiff" id="datefiff" value= "<?php echo $dateDiff; ?>">
                                <input type="hidden" id="roomrate" name="roomrate" value="<?php echo $roomrate; ?>">
                                <input type="hidden" id="hid" name="hid" value="<?php echo $hid; ?>">
                                <input type="hidden" id="hrmid" name="hrmid" value="<?php echo $hrmid; ?>">
                                <input type="hidden" name="l_id" value="<?php echo $this->session->userdata('id'); ?>" >
                                
                                <input type="hidden" name="txtFrom" id="txtFrom" value= "<?php echo $s_date; ?>">
                                <input type="hidden" name="txtTo" id="txtTo" value= "<?php echo $e_date; ?>">

<br>
                               


                    </div>
                    </div>


                    </div>
                    </div>
                    </section>
                    </form>

<script>
function rate(num)
{
var datediff=parseInt(document.getElementById('datefiff').value);


var roomrat=parseInt(document.getElementById('roomrate').value);

var num=parseInt(num);
// alert(datediff);
// alert(roomrat);
// alert(num );
var result= datediff * roomrat * num;
// alert(result);
document.getElementById('trate').value=result;
}
</script>

.........................................................................................

<?php
include('Rbs_footer.php');
}else{
    $CI->login();
}
  ?>