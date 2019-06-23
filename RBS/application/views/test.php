
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
                            <h3 class="title-5 m-b-35">Customer list</h3>

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
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->fname."</td>";
  echo "<td>".$row->lname."</td>";
  echo "<td>".$row->mobile."</td>";
  // echo "<td>".$row->email."</td>";
  echo "<td><a href='blockdata?id=".$row->log_id."'>Block</a></td>";
  echo "<td><a href='unblockdata?id=".$row->log_id."'>Unblock</a></td>";

  echo "</tr>";
  $i++;
  }
   ?>
</tbody>
</table>
<!-- <label><a href="<?php echo site_url("Rbsctrl/login_admin")?>">Home</a></label>

</body>
</html> -->
</div>
</div>
</div>
<?php
include('admin_footer.php');
}else{
    $CI->index();
}
?>
