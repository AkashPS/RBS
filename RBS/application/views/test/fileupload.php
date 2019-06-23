<html>
<head>
<title>Upload Form</title>
</head>
<body>


<form action="<?php echo site_url("Testctrl/upfile")?>"method="post" onsubmit="return" enctype="multipart/form-data">

<input type="file" name="file1"  />

<br /><br />

<input type="file" name="file2"  />

<br /><br />
<input type="submit" value="upload" />

</form>


<form action="<?php echo site_url("Testctrl/date")?>"method="post" onsubmit="return">

<div class="form-group">
                                <div class="col-xs-6">

                                    <input type="date" id="txtFrom" name="txtFrom"  class="form-control" onchange="DateCheck();" placeholder="To date" required>

</div>


<div class="form-group">
    <div class="col-xs-6">
       <input type="date" id="txtTo" name="txtTo" class="form-control" onchange="DateCheck();"  placeholder="From date" required>
   </div>
</div>





<button type="submit" id="check" name="check"class="btn btn-success btn-lg active">check room</button>

</div>


</form>

<form action="<?php echo site_url("Testctrl/buttonif")?>"method="post" onsubmit="return">

 <input type="text" id="txtTo" name="txtTo" class="form-control"  placeholder="enter one" required>
 <button type="submit" id="check" name="check"class="btn btn-success btn-lg active">check room</button>

</form>


<form action="<?php echo site_url("Testctrl/count")?>"method="post" onsubmit="return">

 <input type="text" id="user" name="user" class="form-control"  placeholder="enter one" required>
 <button type="submit" id="count" name="count"class="btn btn-success btn-lg active">count</button>
 <input type="text" id="user1" name="user1" class="form-control"  readonly>


</form>
<!--


<form action="<?php echo site_url("Testctrl/empty")?>"method="post" onsubmit="return" enctype="multipart/form-data">

<input type="text" name="id"  id="id" />
<button type="submit" id="empty" name="check" class="btn btn-success btn-lg active">empty</button>

</form>
 <?php
   foreach($result as $row){
    if(!(empty($row))){
     echo "the test table have value";
    }else{
     echo  "the test table have NO value";
    }
   }
  ?> -->
</body>
</html>
