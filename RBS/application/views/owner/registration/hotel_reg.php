<?php
include('owner_header.php');

?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Application for Hotel :</strong> Applicant Details

                                    </div>
                                 <div class="card-body card-block">
<form action=<?php echo site_url("Ownerctrl/hotelmain_reg")?> method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Aadhaar Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="adhar" name="adhar" placeholder="Aadhaar Number" onchange="Validateaadhar();" class="form-control"  autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="aadhar_1"></label><br>

                                                    <small class="form-text text-muted">Enter your Aadhaar Number</small>
                                                </div>
                                                <script>
                                                function Validateaadhar()
                                                {
                                                  var val = document.getElementById('adhar').value;
                                                  if (!val.match(/^[0-9]{12,12}$/))
                                                  {
                                                  $("#aadhar_1").html('Must. 12 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('adhar').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                                }
                                                </script>
                                        </div>


                                    </div>


										    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" placeholder="Full name" class="form-control" onkeyup="capitalize(this.id, this.value);" placeholder="First Name" onchange="Full_name();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="fullname_1"></label><br>

                                                    <small class="form-text text-muted">Enter your Full name</small>
                                                </div>
                                                <script>
                                    function capitalize(textboxid, str) {
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
                                        function Full_name()
                                        {
                                            var val = document.getElementById('fullname').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#fullname_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('fullname').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father’s Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fathername" name="fathername" placeholder="Father’s Full Name" onkeyup="capitalizef(this.id, this.value);" onchange="Father_name();" autocomplete="off" class="form-control">
                                                    <label class="errortext" style="display:none; color:red" id="fathername_1"></label><br>

                                                    <small class="form-text text-muted">Enter your Father’s Full Name</small>
                                                </div>
                                            </div>

                                            <script>
                                    function capitalizef(textboxid, str) {
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
                                        function Father_name()
                                        {
                                            var val = document.getElementById('fathername').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#fathername_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('fathername').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Gender </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="gender" name="gender" value="MALE" class="form-check-input">Male
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="gender" name="gender" value="FEMALE" class="form-check-input">Female
                                                        </label>
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="gender" name="gender" value="OTHERS" class="form-check-input">Others
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Postal Address</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <textarea name="postaladdress" id="postaladdress" rows="9" placeholder="Address..." class="form-control"></textarea>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="village" name="village" placeholder="Village" class="form-control"  onkeyup="capitalizev(this.id, this.value);" onchange="Village();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="vilage_1"></label><br>

                                                    <small class="form-text text-muted">Enter the village </small>
                                                </div>
                                                <script>
                                    function capitalizev(textboxid, str) {
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
                                        function Village()
                                        {
                                            var val = document.getElementById('village').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#vilage_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('village').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>


                                        <br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="taluk" name="taluk" placeholder="Taluk" class="form-control" onkeyup="capitalizetaluk(this.id, this.value);" onchange="Taluk();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="taluk_1"></label><br>

                                                    <small class="form-text text-muted">Enter the Taluk</small>
                                                </div>

                                                <script>
                                    function capitalizetaluk(textboxid, str) {
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
                                        function Taluk()
                                        {
                                            var val = document.getElementById('taluk').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                            {
                                                $("#taluk_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('taluk').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>



<br>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <!-- <input type="district" id="district" name="district" placeholder="District" class="form-control">
                                                    <small class="form-text text-muted">District</small> -->



                                           <select name="state" id="state" onchange="Sel_district();" required>
                                                    <option value="">Select State</option>
                                                                                                <?php
                                                                                                foreach($state as $row)
                                                                                                    {?>
                                                                                                    <option value="<?php echo $row->id; ?>"> <?php echo $row->sname; ?></option>
                                                                                                    <?php
                                                                                                        
                                                                                                    }
                                                                                                    ?>
                                          </select>
                                                    <label for="shop">District</label>
                                                    <select name="district" id="district" required>                                           
                                                    </select>
                                                    <script src="<?php echo base_url(); ?>vendor/jquery-3.2.1.min.js"></script>
                                           <script>

                                                    function Sel_district()
                                                    {
                                                        var state=document.getElementById('state').value;
                                                        // alert(state);
                                                        var data=new FormData();
                                                        data.append('state',state);
                                                            $.ajax({
                                                            method:'get',
                                                            url:"<?php echo site_url('Rbsctrl/sel_district1');?>",
                                                            
                                                            data: {'state':state},
                                                            success:function(result){
                                                            console.log(result);
                                                            var res = JSON.parse(result);
                                                            $('#district').html("<option value=0>"+"Select District"+"</option>");

                                                            res.forEach(element => {
                                                                $('#district').append("<option value="+element.id+">"+element.name+"</option>");
                                                            });           
                                                                    }
                                                        });
                                                        
                                                        
                                                    }

                                          </script>

                                                </div>
                                                <br>
                                              
                                                <div class="col col-md-3">

                                                </div>
                                                
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="pinode" name="pinode" placeholder="Pin Code" class="form-control"  onchange="Validatepin();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="pin_1"></label><br>
                                                    <small class="form-text text-muted">Enter the Pin Code </small>
                                                </div>
                                                <script>
                                              function Validatepin()
                                              {
                                                  var val = document.getElementById('pinode').value;
                                                  if (!val.match(/^[0-9]{6,6}$/))
                                                  {
                                                  $("#pin_1").html('Must. 6 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('pinode').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>
                                            </div>


    <br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Mobile No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobile" name="mobile" placeholder="Mobile No" class="form-control" onchange="Validatep();" autocomplete="off">
                                                    <label class="errortext" style="display:none; color:red" id="mobile_1"></label><br>
                                                    <small class="form-text text-muted">Enter Mobile No </small>
                                                </div>
                                            </div>
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


<br>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email" name="email" placeholder="Email" class="form-control" required onchange="Validateemail1();" >
                                                    <small class="form-text text-muted">Enter Email </small>
                                                    <label style="display:nne; color:red" id="email_1"></label><br>

                                                    <script>
                                              function Validateemail1()
                                              {
                                                   var email = document.getElementById('email');
                                                     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                                     if (!filter.test(email.value)) {
                                                      email.value="";
                                                      $("#email_1").html('Please provide a valid email address').fadeIn().delay(4000).fadeOut();
                                                      return false;
                                                      }
                                                  return false;
                                              }
                                              </script>
                                                </div>
                                            </div>





                                    </div>





                                </div>
                            </div>





                            <div class="col-lg-6">
                                <div class="card">
                                     <div class="card-header">
                                        <strong>Details for the</strong> License
                                    </div>
                                    <div class="card-body card-block">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Type of License </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="text" id="disabled-input" name="disabled-input" placeholder="HOTEL" disabled="" class="form-control">
                                                    <small class="form-text text-muted">hotel details is going register  </small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Name of the Hotel</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelname" name="hotelname" placeholder=" hotel name" class="form-control" onkeyup="capitalizehotel(this.id, this.value);" onchange="Hotel_name();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hotelname_1"></label><br>

                                                    <small class="form-text text-muted">enter your hotel name  </small>
                                                </div>
                                            </div>
                                            <script>
                                    function capitalizehotel(textboxid, str) {
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
                                        function Hotel_name()
                                        {
                                            var val = document.getElementById('hotelname').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hotelname_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hotelname').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Postal Address of hotel</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <textarea name="hoteladdress" id="hoteladdress" rows="9" placeholder="Address..." class="form-control"></textarea>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelvillage" name="hotelvillage" placeholder="Village" class="form-control" onkeyup="capitalizehvillage(this.id, this.value);" onchange="Hvillage();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hotelvillage_1"></label><br>
                                                    <small class="form-text text-muted">Enter the name of village that hotel situated </small>
                                                </div>
                                                <script>
                                    function capitalizehvillage(textboxid, str) {
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
                                        function Hvillage()
                                        {
                                            var val = document.getElementById('hotelvillage').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hotelvillage_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hotelvillage').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hoteltaluk" name="hoteltaluk" placeholder="Taluk" class="form-control" onkeyup="capitalizehtaluke(this.id, this.value);" onchange="Htaluk();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hoteltaluk_1"></label><br>
                                                    <small class="form-text text-muted">Enter the name of Taluk that hotel situated  </small>
                                                </div>
                                                <script>
                                    function capitalizehtaluke(textboxid, str) {
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
                                        function Htaluk()
                                        {
                                            var val = document.getElementById('hoteltaluk').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hoteltaluk_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hoteltaluk').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>







                                        

<!-- 
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hoteldistrict" name="hoteldistrict" placeholder="District" class="form-control" onkeyup="capitalizedist(this.id, this.value);" onchange="Hdistrict();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hoteldistrict_1"></label><br>
                                                    <small class="form-text text-muted">Enter the name of District that hotel situated </small>
                                                </div>
                                                <script>
                                    function capitalizedist(textboxid, str) {
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
                                        function Hdistrict()
                                        {
                                            var val = document.getElementById('hoteldistrict').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hoteldistrict_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hoteldistrict').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script> -->

                                        <div class="col col-md-3">

</div>
<div class="col-12 col-md-9">
    <!-- <input type="district" id="district" name="district" placeholder="District" class="form-control">
    <small class="form-text text-muted">District</small> -->



<select name="state1" id="state1" onchange="Sel_district2();" required>
    <option value="">Select State</option>
                                                <?php
                                                foreach($state as $row)
                                                    {?>
                                                    <option value="<?php echo $row->id; ?>"> <?php echo $row->sname; ?></option>
                                                    <?php
                                                        
                                                    }
                                                    ?>
</select>
    <label for="shop">District</label>
    <select name="district1" id="district1" required>                                           
    </select>
    <script src="<?php echo base_url(); ?>vendor/jquery-3.2.1.min.js"></script>
    <script>

    function Sel_district2()
    {
        var state=document.getElementById('state1').value;
        // alert(state);
        var data=new FormData();
        data.append('state',state);
            $.ajax({
            method:'get',
            url:"<?php echo site_url('Rbsctrl/sel_district2');?>",
            
            data: {'state':state},
            success:function(result){
            console.log(result);
            var res = JSON.parse(result);
            $('#district1').html("<option value=0>"+"Select District"+"</option>");

            res.forEach(element => {
                $('#district1').append("<option value="+element.id+">"+element.name+"</option>");
            });           
                    }
        });
        
        
    }

</script>
</div>



















                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotellocarea" name="hotellocarea" placeholder="Local area name" class="form-control" onkeyup="capitalizeharea(this.id, this.value);" onchange="Harea();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hotellocarea_1"></label><br>
                                                    <small class="form-text text-muted">Enter the name of Local area name that hotel situated  </small>
                                                </div>
                                                <script>
                                    function capitalizeharea(textboxid, str) {
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
                                        function Harea()
                                        {
                                            var val = document.getElementById('hotellocarea').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hotellocarea_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hotellocarea').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>
                                                <div class="col col-md-3">

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hotelpincode" name="hotelpincode" placeholder="Pin Code" class="form-control" onchange="Validatehpin();" autocomplete="off">
                                                    <label style="display:nne; color:red" id="hpin_1"></label><br>
                                                    <small class="form-text text-muted">Enter the name of Pin Code that hotel situated </small>
                                                </div>
                                            </div>
                                            <script>
                                              function Validatehpin()
                                              {
                                                  var val = document.getElementById('hotelpincode').value;
                                                  if (!val.match(/^[0-9]{6,6}$/))
                                                  {
                                                  $("#hpin_1").html('Must. 6 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('hotelpincode').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Area of Hotel(Yards/Sq.
                                                    Metres/Acres/
                                                    Hectares)</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotelarea" name="hotelarea" placeholder="Area of the hotel" class="form-control" autocomplete="off">
                                                <!-- <label style="display:nne; color:red" id="htotalarea_1"></label><br> -->

                                                    <small class="form-text text-muted">Enter the totatl Area of the hotel</small>
                                                </div>
                                            </div>
                                            <!-- <script>
                                              function Validatehtotalarea()
                                              {
                                                  var val = document.getElementById('hotelarea').value;
                                                  if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                                  {
                                                  $("#htotalarea_1").html('Numbers not Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('hotelarea').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script> -->


                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Does Applicant own the land</label>
                                                </div>

                                                <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="hotelowner" name="hotelowne0" value="option1" class="form-check-input">YES
                                                            </label>&nbsp &nbsp
                                                            &nbsp &nbsp
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="hotelowner1" name="hotelowner1" value="option1" class="form-check-input">NO
                                                            </label>
                                                        </div>
                                            </div> -->


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Name of the owner of
                                                    the land
                                                    </label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotelowner" name="hotelowner" placeholder="name of the owner " class="form-control" onkeyup="capitalizehowner(this.id, this.value);" onchange="Howner();" autocomplete="off">
                                                <label style="display:nne; color:red" id="hotelowner_1"></label><br>

                                                    <small class="form-text text-muted">Enter the name of the hotel owner</small>
                                                </div>
                                            </div>

                                            <script>
                                    function capitalizehowner(textboxid, str) {
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
                                        function Howner()
                                        {
                                            var val = document.getElementById('hotelowner').value;
                                            // alert(val);
                                            if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/))
                                            {
                                                $("#hotelowner_1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                document.getElementById('hotelowner').value="";
                                                return false;
                                            }
                                            return true;
                                        }
                                        </script>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">License Number of the license
                                                    obtained from Gov: authority
                                                    </label>
                                                </div>


                                                <div class="col-12 col-md-9">
                                                <input type="text" id="hotellicense" name="hotellicense" placeholder="License Number  " class="form-control" onchange="Validatehlno();" autocomplete="off">
                                                <label style="display:nne; color:red" id="hotellicense_1"></label><br>

                                                    <small class="form-text text-muted">Enter the License Number of the Hotel </small>
                                                </div>
                                            </div>

                                            <script>
                                              function Validatehlno()
                                              {
                                                  var val = document.getElementById('hotellicense').value;
                                                  if (!val.match(/^[0-9]{10,15}$/))
                                                  {
                                                  $("#hotellicense_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('hotellicense').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>







                                    </div>
                                </div>
                            </div>



                                <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>


                                </div>
                               </form>
                            </div>
                            </div>
                            </div>
                            </div>


<?php
include('owner_footer.php');
?>
