
<?php
include('user_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>
<form action=<?php echo site_url("Ownerctrl/editedprofile")?> method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="row">
<?php
  	  	foreach($owner as $row)
  			{
  		        $a=$row->fname;
  			      $b=$row->lname;
  			      $c=$row->mobile;
              $d=$row->deal_id;
              $e=$row->property_name;
              $f=$row->town;
              $g=$row->place;
              $h=$row->state;
              $i=$row->district;
              $j=$row->pincode;
              $k=$row->id_type;
              $l=$row->id_proof;
              $m=$row->prop_proof;
              $n=$row->prop_doc;
  	?>

                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                        <?php echo $a;  ?>

                                    </div>




                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">

                                            <p>Profile details</p>

                                        </div>
                                         <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">first name:</a>
                                                         &nbsp &nbsp</h5>
                                                        <input type="text" id="fname" name="a" value="<?php echo $a;  ?>" onkeyup="capitalizef(this.id, this.value);" onchange="Fname();" autocomplete="off">
                                                        <!-- <label class="errortext" style="display:none; color:red" id="f_name1"></label><br> -->
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
                                                function Fname()
                                                {
                                                    var val = document.getElementById('fname').value;
                                                    // alert(val);
                                                    if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                    {
                                                      alert("Only Alphabets Allowed..!");
                                                        // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                        document.getElementById('fname').value="";
                                                        return false;
                                                    }
                                                    return true;
                                                }
                                                </script>
                                                 </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Last name:</a>&nbsp &nbsp</h5>

                                                    <input type="text" id="b" name="b"  value="<?php echo $b;  ?>" onkeyup="capitalizel(this.id, this.value);" onchange="Lname();" autocomplete="off">
                                                    <script>
                                        function capitalizel(textboxid, str) {
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
                                            function Lname()
                                            {
                                                var val = document.getElementById('b').value;
                                                // alert(val);
                                                if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                {
                                                  alert("Only Alphabets Allowed..!");
                                                    // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('b').value="";
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Mobile:</a>&nbsp &nbsp </h5>

                                                    <input type="text" id="c" name="c" value="<?php echo $c;  ?>" onchange="Validatep();" autocomplete="off">
                                                    <script>
                                                      function Validatep()
                                                      {
                                                          var val = document.getElementById('c').value;
                                                          if (!val.match(/^[7-9][0-9]{9,9}$/))
                                                          {
                                                              alert("Only Numbers Allowed..!")
                                                          // $("#mobile_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                          document.getElementById('c').value = "";
                                                              return false;
                                                          }
                                                          return true;
                                                      }
                                                      </script>

                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Proerty Name:</a>&nbsp &nbsp</h5>

                                                    <input type="text"  id="d" name="d" value="<?php echo $e;  ?>" onkeyup="capitalizepname(this.id, this.value);" onchange="Property();" autocomplete="off">
                                                    <script>
                                        function capitalizepname(textboxid, str) {
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
                                            function Property()
                                            {
                                                var val = document.getElementById('d').value;
                                                // alert(val);
                                                if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                {
                                                  alert("Only Alphabets Allowed..!");
                                                    // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('d').value="";
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Town:</a>&nbsp &nbsp</h5>

                                                    <input type="text"  id="e" name="e"  value="<?php echo $f;  ?>" onkeyup="capitalizetown(this.id, this.value);" onchange="Town();" autocomplete="off">
                                                    <script>
                                        function capitalizetown(textboxid, str) {
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
                                            function Town()
                                            {
                                                var val = document.getElementById('e').value;
                                                // alert(val);
                                                if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                {
                                                  alert("Only Alphabets Allowed..!");
                                                    // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('e').value="";
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>
                                                </div>
                                            </div>

                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Place:</a>&nbsp &nbsp</h5>

                                                    <input type="text" id="f" name="f"  value="<?php echo $g;  ?>" onkeyup="capitalizeplace(this.id, this.value);" onchange="Place();" autocomplete="off">
                                                    <script>
                                        function capitalizeplace(textboxid, str) {
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
                                            function Place()
                                            {
                                                var val = document.getElementById('f').value;
                                                // alert(val);
                                                if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                {
                                                  alert("Only Alphabets Allowed..!");
                                                    // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('f').value="";
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>

                                                 </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">State:</a>&nbsp &nbsp</h5>

                                                    <input type="text" id="g" name="g"  value="<?php echo $h;  ?>" onkeyup="capitalizestate(this.id, this.value);" onchange="State();" autocomplete="off">
                                                    <script>
                                        function capitalizestate(textboxid, str) {
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
                                            function State()
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
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">District:</a>&nbsp &nbsp</h5>
                                                        <input type="text" id="h" name="h" value="<?php echo $i;  ?>" onkeyup="capitalizedist(this.id, this.value);" onchange="Dist();" autocomplete="off">
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
                                                function Dist()
                                                {
                                                    var val = document.getElementById('h').value;
                                                    // alert(val);
                                                    if (!val.match(/^[A-Z][A-Za-z" "]{0,}$/))
                                                    {
                                                      alert("Only Alphabets Allowed..!");
                                                        // $("#f_name1").html('Min. 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                        document.getElementById('h').value="";
                                                        return false;
                                                    }
                                                    return true;
                                                }
                                                </script>
                                                   </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">pincode:</a>&nbsp &nbsp</h5>

                                                    <input type="text" id="i" name="i" value="<?php echo $j;  ?>" onchange="Validatepin();" autocomplete="off">
                                                    <script>
                                                      function Validatepin()
                                                      {
                                                          var val = document.getElementById('i').value;
                                                          if (!val.match(/^[0-9]{6,6}$/))
                                                          {
                                                              alert("must be six & Only Numbers Allowed..!")
                                                          // $("#mobile_1").html('Must. 10 and Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                          document.getElementById('i').value = "";
                                                              return false;
                                                          }
                                                          return true;
                                                      }
                                                      </script>
                                                 </div>
                                            </div>
                                         </div>
                                        <div class="au-task__footer">
                                            <button name="edit" class="au-btn au-btn-load js-load-btn"type="submit">Edit Profile</button>


                                        </div>
                                    </div>
                                </div>
                            </div>
</form>
<!-- next section for docments to display section -->




<?php }?>

<?php
}else{
    include('user_footer.php');

    $CI->index();
}
?>
