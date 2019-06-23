<?php
include('owner_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{ ?>
<form action="<?php echo site_url("Ownerctrl/hoetlroom_registration")?>"method="post" onsubmit="return" >

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Enter Room Deatils</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"> Room Deatils</h3>
                                        </div>

                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Select Room Type</label>
                                                <div class="col-6">
                                               <div class="input-group">

                                                    <select name="category" id="category1" required class="form-control-lg form-control">
                                                    <!-- <select name="" id=""  onchange="sel_type()" class="form-control" > -->
                                                    <option value="0">Please select</option>
                                                    <?php
                                                        foreach($type as $val)
                                                        {?>
                                                        <option value="<?php echo $val->r_id; ?>" > <?php echo $val->r_type; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Number of Room </label>
                                                <input name="room_n" id="room_n" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"  onchange="Validatenorm();" >
                                                    <label class="errortext" style="display:none; color:red" id="pin_1"></label><br>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                <script>
                                           function Validatenorm()
                                           {
                                               var val = document.getElementById('room_n').value;
                                               if (!val.match(/^[0-9]{}$/))
                                               {
                                               $("#pin_1").html('Must Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                               document.getElementById('pinode').value = "";
                                                   return false;
                                               }
                                               return true;
                                           }
                                           </script>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Rate for the per day</label>
                                                <input  name="room_r" id="room_r" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number" onchange="Validateraterm();" >
                                                      <label class="errortext" style="display:none; color:red" id="pin_2"></label><br>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                <script>
                                                function Validateraterm()
                                                {
                                                    var val = document.getElementById('room_n').value;
                                                    if (!val.match(/^[0-9]{}$/))
                                                    {
                                                    $("#pin_2").html('Must Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('pinode').value = "";
                                                        return false;
                                                    }
                                                    return true;
                                                }
                                                </script>
                                            </div>

                                            <input type="hidden" name="h_id" value="<?php echo $hid ; ?>" >
                                            <div>
                                                <button name="add" value="add" id="submit" type="submit" class="btn btn-lg btn-info btn-block" >

                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">SAVE</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
</div>
</form>
<?php
}else{
    $CI->index();
}

 include('owner_footer.php');
?>
