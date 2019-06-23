<?php
include('owner_header.php');
?>
<br><br><br>

                           <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic details of</strong> HOTEL
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?php echo site_url("Ownerctrl/hotel_registration")?>"method="post" onsubmit="return" enctype="multipart/form-data">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Hotel Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text"  name="hname" id="hname" value="<?php echo $htlname; ?>" >
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text"  name="hadd" id="hadd" value="<?php echo $htladr; ?>" >

                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Pincode</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text"  name="hpin" id="hpin"  value="<?php echo $htlpin; ?>" >

                                                </div>
                                            </div>
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Enter Hotel contact Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" id="mobile" name="mobile" placeholder="Mobile No" class="form-control" onchange="Validatep();" autocomplete="off">
                                                <label class="errortext" style="display:none; color:red" id="mobile_1"></label><br>
                                                <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('mobile').value;
                                                  if (!val.match(/^[7-9][0-9]{9,9}$/))
                                                  {
                                                  $("#mobile_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('mobile').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>


                                                
                                                
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">longitude</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" placeholder="longitude"  id="e"   name="e" >

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">latitude</label>
                                                </div>
                                                <div class="col-12 col-md-9">                        
                                                    
                                                        <input type="text" placeholder="latitude"  id="f"  name="f">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Upload Hotel image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="file" name="homeimg">

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">discription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  class="form-control" placeholder="discription"  id="g"  name="g" onkeyup="capitalizedisc(this.id, this.value);" onchange="Discription();" autocomplete="off" required> </textarea>

                                                <script>
function capitalizedisc(textboxid, str) {
    // string with alteast one character
    if (str && str.length >= 1)
    {
        var firstChar = str.charAt(0);
        var remainingStr = str.slice(1);
        str = firstChar.toUpperCase() + remainingStr;
    }
    document.getElementById(textboxid).value = str;
}
</script>

<script>
    function Discription()
    {
        var val = document.getElementById('g').value;
        // alert(val);
        if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
        {
          alert("Only Alphabets Allowed..!");
            // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
            document.getElementById('g').value="";
            return false;
        }
        return true;
    }
    </script>
                                                </div>
                                            </div>


                                             <input type="hidden" name="c_id" value="<?php echo $cat_id; ?>" >
                                             <input type="hidden" name="h_id" value="<?php echo $h_id; ?>" >
                                             <input type="hidden" name="l_id" value="<?php echo $this->session->userdata('id'); ?>" >
                                                                  





    <button  name="save"  value="save" type="submit" class="btn btn-outline-primary btn-lg btn-block">Save </button>


    </form>

                                    </div> 
                                </div>
                           </div>               

<?php
 include('owner_footer.php');
?>

