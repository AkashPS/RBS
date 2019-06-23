
<?php
include('admin_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Owner requet</h3>

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
  <tr >
    <th>Sr No</th>
    <th>first name</th>
    <th>last name</th>
    <th>mobile</th>
    <th>Block</th>
    <th>Unblock</th>


  </tr>
  </thead>
  <tbody>
  <?php
  $i=1;

  foreach($data as $row)
  {
      $logid=$row->log_id;
      $aprst=$row->aproval;
      $fname=$row->fname;
      $lname=$row->lname;
      $mob=$row->mobile;
      $email=$row->email;
            ?>

            <form action="<?php echo site_url("Rbsctrl/approval")?>" method="post">
            <?php
                    if($aprst==2)
                            {
                                        echo "<tr>";
                                        echo "<td>".$fname."</td>";
                                        echo "<td>".$lname."</td>";
                                        echo "<td>".$mob."</td>";
                                        echo "<td>".$email."</td>";
                                        echo "<td><input type='hidden' name='logid' value='$logid'></td>";
                                        echo "<td><input type='submit' name='submit' class='btn btn-success' value='Approve'></td>  ";

                                        echo "</tr>";
                            }
            ?>
            </form>
    <?php

  }
    ?>
</tbody>
</table>

</div>
</div>
</div>
<?php
include('admin_footer.php');
}
?>
