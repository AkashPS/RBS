<html>
<body>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<footer id="footer"> Copyright © 2019 Practo
  <ul class="f-menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Reports</a></li>
    <li><a href="#">Support</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</footer>

<!-- Javascript Libraries --> 
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap-growl.min.js"></script> 

<!-- LightGallery --> 
<script src="<?php echo base_url(); ?>js/lightgallery.js"></script> 
<script src="<?php echo base_url(); ?>js/lg-video.js"></script> 
<script src="<?php echo base_url(); ?>js/lg-fullscreen.js"></script> 
<script src="<?php echo base_url(); ?>js/lg-zoom.js"></script> 
<!-- End LightGallery --> 

<script src="<?php echo base_url(); ?>js/functions.js"></script> 
<script src="<?php echo base_url(); ?>js/demo.js"></script>
</body>

<!--photo-timeline.html 18:00:16 GMT -->
</html>