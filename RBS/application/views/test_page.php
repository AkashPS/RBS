
<?php include('user_header.php');
?>

  <li><button type="submit" class="btn amado-btn mb-15" value="login" ><a href="<?php echo site_url('Testctrl/fileup')?>">test file</a></li>

<h1 align="center"> akash</h1>
<?php


foreach($list as $row)
{
  $img=$row->image;
?>

<img src="<?php echo base_url('images/home/').$img;?>">


<?php
}
 ?>

<?php include('user_footer.php');
?>
