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
    <th>Month</th>
    <th>Year</th>
    <th>Amount</th>



  </tr>
  </thead>
  <tbody>
  <?php
  foreach($rate as $row)
  {
      $month=$row->month;
      $year=$row->year;
      $amount=$row->amount;
                                        echo "<tr>";
                                        echo "<td>".$month."</td>";
                                        echo "<td>".$year."</td>";
                                        echo "<td>".$amount."</td>";


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
