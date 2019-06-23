<?php
include('user_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{ ?>
<p>hostel</p>
<form action="<?php echo site_url("Ownerctrl/hostel_registration")?>"method="post" onsubmit="return" enctype="multipart/form-data">

<h1 align ="center"><?php echo $this->session->userdata('id');?></h1>
<!-- <?php echo $cat_id; ?> -->
<br>
<br>
<br>



<div id="app">
<canvas id="canvas"></canvas>
<div id="loginbox">


<input type="text" placeholder="Home Name"  name="a"  >

<input type="text" placeholder="Address"  name="b">

<input type="text" placeholder="contact"  name="c">

<input type="text" placeholder="pincode"  name="d">

<input type="text" placeholder="longitude"  name="e">

<input type="text" placeholder="latitude"  name="f">

<input type="file" name="homeimg">

<input type="text" placeholder="discription" name="g">

<input type="hidden" name="c_id" value="<?php echo $cat_id; ?>" >

<input type="hidden" name="l_id" value="<?php echo $this->session->userdata('id'); ?>" >





	<button name="save"  value="save" type="submit">Save </button>

</div>
</div>
</form>


<?php
}else{
    $CI->index();
}

 include('user_footer.php');
?>



<body>
</html>
