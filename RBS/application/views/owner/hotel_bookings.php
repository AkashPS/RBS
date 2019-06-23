<?php
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
  include('owner_header.php');

 ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Bokings</h3>

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
  <tr >
    <th>Startdate</th>
    <th>Enddate</th>
    <th>Name</th>
    <th>Rooms</th>



  </tr>
  </thead>
  <tbody>
  <?php
  foreach($hotel as $row)
  {
      $fname=$row->fname;
      $sdate=$row->startdate;
      $edate=$row->enddate;
      $norm=$row->norooms;
                                        echo "<tr>";
                                        echo "<td>".$sdate."</td>";
                                        echo "<td>".$edate."</td>";
                                        echo "<td>".$fname."</td>";

                                        echo "<td>".$norm."</td>";

                                        echo "</tr>";

          }
    ?>
</tbody>
</table>

</div>
</div>
</div>





<?php
include('owner_footer.php');
}else{
    $CI->login();
}

 ?>
