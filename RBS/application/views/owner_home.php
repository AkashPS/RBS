<?php
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>

<html>
<head>
<title>owner home</title>
</head>
<body>

  <style>


  #app
  {
  	min-height:10vh;
  	width:100vw;
  	margin:0;
  }

  #loginbox
  {
      left: 82%;
      right: 50%;
      z-index: 1000;
      position: absolute;
      top: 30%;
      display: block;
      padding: 20px 20px;
      width: 242px;
      background: darkcyan;
      box-shadow: 0px 0px 9px #f7eef0;
  }

  #loginbox input, #loginbox button
  {
  	margin-bottom: 5px;
      padding: 10px;
      border: 0;
      position: relative;
      display: block;
      border-radius: 8px;
      width: 200px;
  	text-align:center;

a {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
  }
  </style>

<div id="app"  style="background-color:2290DD" >

<canvas id="canvas" ></canvas>
<div id="loginbox">
</div>

</div>
<br>
<br>
<br>
<br>
<br>




<div id="loginbox">
	<input type="text" disabled value="<?php echo  $this->session->userdata('email')?>">

<li><button type="submit" value="Logout"><a href="<?php echo site_url("Rbsctrl/logout")?>">Logout</a></button></li>



</div>


</body>
</html>
<?php
}else{
    $CI->index();
}
?>
