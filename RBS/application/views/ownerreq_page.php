<?php
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>

<html>

    <head>
        <style>
    body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

/* h1,
h6 {
	font-family: 'Open Sans';
	font-weight: 300;
	text-align: center;
	position: absolute;
	top: 45%;
	right: 0;
	left: 0;
} */



#app{
	min-height:100vh;
	width:100vw;
	margin:0;
}

#loginbox {
    left: 33%;
    right:33% ;
    z-index: 1000;
    position: absolute;
    top: 30%;
    display: block;
    padding: 70PX 30px;
    width: fit-content;
    background: rgba(0, 0, 0, 0.06);
    box-shadow: 36px 36px 37px rgba(141, 139, 154, 0.9);
    border-radius: 35px;
}


#loginbox input, #loginbox button{
	margin-bottom: 5px;
    padding: 10px;
    border: 0;

   position: relative;
    display: block;
    border-radius: 8px;
    width: 400px;
	text-align:center;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 0%;
}

</style>
</head>
<body>
  <h1><?php echo $this->session->userdata('email')?></h1>
  <div align="right">
 
      
         
              <button>   <a href="<?php echo site_url("Rbsctrl/logout") ?> ">
                <i class="zmdi zmdi-power"></i>Logout</a></button>
       
 
  </div>  
  <h1 align='center'>Please complete your registration for 'ADMIN' approval </h1>



  <form action="<?php echo site_url("Rbsctrl/owner_registration")?>"method="post" onsubmit="return" enctype="multipart/form-data">

  <!-- <h1 align ="center"><?php echo $this->session->userdata('id');?></h1> -->
  <!-- <?php echo $cat_id; ?> -->
  <br>




  <div id="app">
  <canvas id="canvas"></canvas>
  <div id="loginbox">
    <?php
  	  	foreach($owner1 as $row)
  			{
  				$fname=$row->fname;
  			  $lname=$row->lname;
  				$mob=$row->mobile;
          $d_id=$row->deal_id;
  	?>

  <input type="text" disabled value="<?php echo $this->session->userdata('email')  ?>">

  <input type="text" disabled value="<?php echo $fname;  ?>">

  <input type="text" disabled value="<?php echo $lname;  ?>">
  <input type="hidden" name="deal_id" value="<?php echo $d_id;  ?>">


  <input type="text"disabled value="<?php echo $mob;  ?>">
  <?php }?>


  <input type="text" placeholder="property name"  name="a">

  <input type="text" placeholder="town"  name="b">

  <input type="text" placeholder="place"  name="c">

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







  <!-- <input type="text" placeholder="district"  name="e"> -->

  <input type="text" placeholder="pincode"  name="f">

  
  
  <select name="g" id="g" placeholder="identity proof" required>
                                                        <option value="AADHAAR">AADHAAR</option>
                                                        <!-- <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
                                                    </select>

  <input type="file" name="file1"  />


  <input type="text" placeholder="doccuments of property"  name="h">

  <input type="file" name="file2"  />


  <input type="hidden" name="l_id" value="<?php echo $this->session->userdata('id'); ?>" >

	<button name="save"  value="save" type="submit">Save </button>


  <!-- <input type="text" placeholder="<?php echo $this->session->userdata('id'); ?>" name="g"> -->

  <!-- <input type="hidden" name="c_id" value="<?php echo $cat_id; ?>" > -->
  </div>
  </div>
  </form>





<!-- <form action="<?php echo site_url("Rbsctrl/sample")?>"  method="post" onsubmit="return">

</form> -->






   <!-- Jquery JS-->
  
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>js/main.js"></script>

</body>
</html>
<?php
}else{
    $CI->index();
}
?>
