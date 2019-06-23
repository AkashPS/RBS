<?php
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
  include('owner_header.php');

 ?>
 
<br><br><br><br>

 <form action="<?php echo site_url("Ownerctrl/searchrooms")?>"method="post" onsubmit="return" >

<input type="hidden" name="hotelid" value="<?php echo $hid; ?>">

<input type="hidden" name="hotelrmid" value="<?php echo $hrmid; ?>">

<input type="hidden" name="logid" value="<?php echo $logid; ?>">


<input type="hidden" name="roomrate" value="<?php echo $roomrate; ?>">



    <i><h1 style="color: #03aee9;"><b>CHECK YOUR ROOM!</h1></b></i>
    <div class="form-group">
                <div class="col-xs-6">
                <input type="hidden" name="hotelid" value="<?php echo $hid; ?>">

                    <input type="date" id="txtFrom" name="txtFrom"  class="form-control" onchange="DateCheck();" placeholder="To date" required>
                </div>


                 <div class="form-group">
                     <div class="col-xs-6">
                        <input type="date" id="txtTo" name="txtTo" class="form-control" onchange="DateCheck();"  placeholder="From date" required>
                    </div>
                </div>

                <button type="submit" id="check" name="check"class="btn btn-success btn-lg active">check room</button>
                
</div>

</form>

<script>
function DateCheck()
                    {
                      var StartDate= document.getElementById('txtFrom').value;
                      var EndDate= document.getElementById('txtTo').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate != '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('txtTo').value="";
                        return false;
                        }
                    }
                    </script>
                         <script>
                        $(function() {
                  $(document).ready(function () {

                  var todaysDate = new Date(); // Gets today's date
                    var year = todaysDate.getFullYear();                        // YYYY
                    var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);  // MM
                    var day = ("0" + todaysDate.getDate()).slice(-2);           // DD
                    var minDate = (year +"-"+ month +"-"+ day); // Results in "YYYY-MM-DD" for today's date 
                    $('#txtFrom').attr('min',minDate);
                    $('#txtTo').attr('min',minDate);
                  });
                });

                </script>





<?php
 include('owner_footer.php');
 }else{
     $CI->login();
 }

  ?>
