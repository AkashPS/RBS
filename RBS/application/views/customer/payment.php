<?php

$CI =&get_instance();
$a=$CI->sessionin();
$logid=$CI->logid();
if($a==1)
{
  include('Rbs_header.php');


 ?>

<br><br><br><br><br><br><br>

<div align="center">

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                      <div class="card-body">
                                            <div class="card-title">

                                                <h3 class="text-center title-2">Payment details</h3>
                                            </div>
                                            <hr>

    <form action="<?php echo site_url("Custctrl/payandbook")?>"method="post" onsubmit="return" >
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Card Number</label>
                                                    <input id="cno" name="cno" type="text" required class="form-control" aria-required="true" aria-invalid="false" placeholder="XXXX XXXX XXXX XXXX" onchange="Validatecardnum();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="pin_1"></label><br>
                                                    <script>
                                              function Validatecardnum()
                                              {
                                                  var val = document.getElementById('cno').value;
                                                  if (!val.match(/^[0-9]{16,16}$/))
                                                  {
                                                  $("#pin_1").html('Must. 16 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('cno').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>

                                                </div>

                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">Card Holder Name</label>
                                                    <input id="cname" name="cname" type="text"  class="form-control" aria-required="true" aria-invalid="false" placeholder="Card Holder Name"  >
                                                    <label class="errortext" style="display:none; color:red" id="taluk_1"></label><br>

                                    <script>
                                        function Cname()
                                        {
                                            var val = document.getElementById('cname').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{}$/))
                                            {
                                                $("#taluk_1").html(' Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('cname').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>


                                                </div>


                                                <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expriy Month</label>

                                                        <div class="input-group">

                                                        <select style="height:40px;width:200px;" name="month" required class="form-control " placeholder="expriy date">
                                                            <option value="Jan">Jan</option>
                                                            <option value="Feb">Feb</option>
                                                            <option value="Mar">Mar</option>
                                                            <option value="Apr">Apr</option>
                                                            <option value="May">May</option>
                                                            <option value="Jun">Jun</option>
                                                            <option value="Jul">Jul</option>
                                                            <option value="Aug">Aug</option>
                                                            <option value="Sep">Sep</option>
                                                            <option value="Oct">Oct</option>
                                                            <option value="Nov">Nov</option>
                                                            <option value="Dec">Dec</option>

                                                </select>
                                             </div>
                                                    </div>
                                                </div>


                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Expriy Year</label>
                                                    <div class="input-group">

                                                    <select style="height:40px;width:200px;" name="year" class="form-control " required placeholder="Expriy Year">
                                                <option value="2019">2019</option>
                                                 <option value="2020">2020</option>
                                                 <option value="2021">2021</option>
                                                 <option value="2022">2022</option>
                                                 <option value="2023">2023</option>
                                                 <option value="2024">2024</option>
                                                 <option value="2025">2025</option>
                                                 <option value="2026">2026</option>
                                                 <option value="2027">2027</option>
                                                 <option value="2028">2028</option>

                                                 </select>
                                                </div>

                                                    </div>
                                                </div>





                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1"> cvv</label>
                                                        <input id="cvv" name="cvv" required type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="CVV" onchange="Validatecvv();" autocomplete="off">
                                                        <label class="errortext" style="display:none; color:red" id="pin_1"></label><br>
                                                    <script>
                                              function Validatecvv()
                                              {
                                                  var val = document.getElementById('cvv').value;
                                                  if (!val.match(/^[0-9]{3,3}$/))
                                                  {
                                                  $("#pin_1").html('Must. 16 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('cvv').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Amount</label>
                                                    <div class="input-group">
                                                         <input id="ammount" required name="ammount" type="text"  readonly class="form-control" aria-required="true" aria-invalid="false"  value="<?php echo $trate; ?>" >

                                                    </div>
                                                </div>
                                                <input type="hidden"  name="l_id" id="l_id" value="<?php echo $this->session->userdata('id'); ?>" >
<input type="hidden" id="hid" name="hid" value="<?php echo $hid; ?>">
<input type="hidden" id="hrmid" name="hrmid" value="<?php echo $hrmid; ?>">
<input type="hidden" id="trate" name="trate" value="<?php echo $trate; ?>">
<input type="hidden" id="s_date" name="s_date" value="<?php echo $s_date; ?>">
<input type="hidden" id="e_date" name="e_date" value="<?php echo $e_date; ?>">
<input type="hidden" id="norm" name="norm" value="<?php echo $norm; ?>">

                                                <div >

                                                        <input align="center" type="submit" class="btn btn-primary btn-normal btn-lg" name="submit" value="make payment">

                                                        <button type="button" class="btn btn-primary btn-normal btn-lg" onclick="window.location='<?php echo site_url('Custctrl/cust_homepage1');?>'">Cancel</button>

                                                </div>


                                            </div>
                                            <div>
                                            </div>


</form>



<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>






                                        </div>
                                    </div>
                                </div>
                          </div>
                        </div>
                   </div>
                </div>
</div>

<br>   <br>   <br>   <br>






<BR><BR><BR><BR>

</div>




<?php
include('Rbs_footer.php');
}else{
    $CI->login();
}
  ?>
