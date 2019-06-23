<h1>count</h1>

<?php
 
  foreach($res as $row)   
  {
      $email=$row->email;
      $usertype=$row->usertype;
     
      ?>
            <input type='text' name='email' <?php echo "value='$email'"; ?>>   
            <input type='text' name='usertype' <?php echo "value='$usertype'"; ?>>  

<?php 
}
?>