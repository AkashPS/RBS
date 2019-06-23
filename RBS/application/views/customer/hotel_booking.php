<?php




   $CI =&get_instance();
   $a=$CI->sessionin();
   $logid=$CI->logid();
   if($a==1)
   {
     include('Rbs_header.php');


  ?>
  
  <link href="../rs-plugin/css/settings.css" rel="stylesheet">
 <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- <script src="js/search.js"></script> -->

  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
  <div class="container">
    <div class="banner_content text-center">
      <h2>Pick Days</h2>
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
        <h2>Select dates for check-in</h2>
      </div>
      <div class="furniture_inner row">

<br><br><br><br><br><br><br><br>
<div class="col-lg-4">
  <div class="furniture_item">
                <form action="<?php echo site_url("Custctrl/searchrooms")?>"method="post" onsubmit="return" >

                <input type="hidden" name="hotelid" value="<?php echo $hid; ?>">

                <input type="hidden" name="hotelrmid" value="<?php echo $hrmid; ?>">

                <input type="hidden" name="logid" value="  <?php echo $logid; ?>">
                
                <input type="hidden" name="roomrate" value="  <?php echo $roomrate; ?>">



                    <i><h1 style="color: #03aee9;"><b>CHECK YOUR ROOM!</h1></b></i>
                    <div class="form-group">
                                <div class="col-xs-6">

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



</div>
</div>


</div>
</div>
<!-- ........................................date check......................................................................... -->
<script>
function DateCheck()
                    {
                      var StartDate= document.getElementById('txtFrom').value;
                      var EndDate= document.getElementById('txtTo').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate != '' && EndDate!= '' && StartDate >= EndDate)
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

<!-- 
<script>
var date_diff_indays = function(txtFrom, txtTo) {
dt1 = new Date(date1);
dt2 = new Date(date2);
return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
}
console.log(date_diff_indays('04/02/2014', '11/04/2014'));
console.log(date_diff_indays('12/02/2014', '11/04/2014'));


</script> -->

<!-- ........................................date check......................................................................... -->









</section>
                            <!-- <script src="<?php echo base_url('assets/user/js/jquery.min.js')?>"></script> -->
                            <script src="<?php echo base_url('assets/user/js/bootstrap.min.js')?>"></script>
                            <script src="<?php echo base_url('assets/user/js/interface.js')?>"></script>
                            <!--Carousel-JS-->
                            <script src="<?php echo base_url('assets/user/js/owl.carousel.min.js')?>"></script>

                            <script src="<?php echo base_url('assets/user/js/bootstrap-datepicker.js')?>"></script>



<?php
 include('Rbs_footer.php');
  ?>
  <!--  -->
<?php
include('Rbs_footer.php');
}else{
    $CI->login();
}

 ?>
