<?php
include('user_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>


<form action=<?php echo site_url("Ownerctrl/editprofile")?> method="post" enctype="multipart/form-data" class="form-horizontal">
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




                                    <div id="tab"  class="au-task js-list-load">
                                        <div class="au-task__title">

                                            <p>Profile details</p>

                                        </div>
                                         <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">first name:</a>
                                                         &nbsp &nbsp</h5>
                                                        <input type="text" disabled value="<?php echo $a;  ?>">

                                                 </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Last name:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $b;  ?>">
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Mobile:</a>&nbsp &nbsp </h5>

                                                    <input type="text" disabled value="<?php echo $c;  ?>">
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Proerty Name:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $e;  ?>">
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Town:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $f;  ?>">
                                                </div>
                                            </div>

                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Place:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $g;  ?>">

                                                 </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">State:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $g;  ?>">
                                                 </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">District:</a>&nbsp &nbsp</h5>
                                                        <input type="text" disabled value="<?php echo $i;  ?>">
                                                   </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">pincode:</a>&nbsp &nbsp</h5>

                                                    <input type="text" disabled value="<?php echo $j;  ?>">
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
<script>
function createPDF() {
 var sTable = document.getElementById('tab').innerHTML;

 var style = "<style>";
 style = style + "table {width: 100%;font: 17px Calibri;}";
 style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
 style = style + "padding: 2px 3px;text-align: center;}";
 style = style + "</style>";

 // CREATE A WINDOW OBJECT.
 var win = window.open('', '', 'height=700,width=700');

 win.document.write('<html><head>');
 win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
 win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
 win.document.write('</head>');
 win.document.write('<body>');
 win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
 win.document.write('</body></html>');

 win.document.close(); 	// CLOSE THE CURRENT WINDOW.

 win.print();    // PRINT THE CONTENTS.
}
</script>
<!-- next section for docments to display section -->




<!-- 
<input type="button" style="border:none;margin-left:950px;margin-top:15px;color:blue;height:30px;" value="Download"
        id="btPrint" onclick="createPDF()" /> -->


<?php }?>

<?php
}else{
    include('user_footer.php');

    $CI->index();
}
?>
