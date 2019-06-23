<?php

include('Rbs_header.php');

$CI =&get_instance();

?>

<section class="home_banner_area">
    <div class="banner_inner">
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div class="banner_content">
        <h2>Precise concept design <br />for stylish living</h2>
        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        <a class="banner_btn" href="#">Get Started</a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="home_right_box">

        <div class="home_item">
          <a href="<?php echo site_url("Rbsctrl/hotels"); ?>">
          <i class="flaticon-bed" alt="Hotels"></i>
          </a>
          <h5>Hotels</h5>
        </div>
        <div class="home_item">
          <a href="<?php echo site_url("Rbsctrl/hostels"); ?>">
          <i class="flaticon-computer" alt="Hostels"></i>
          </a>
          <h5>Hostels</h5>
        </div>
        <!-- <div class="home_item">
          <i class=""></i>
        </div>


        <div class="home_item">
          <i class=""></i>
        </div> -->

      </div>
    </div>
  </div>
</div>
    </div>
</section>

<?php


include('Rbs_footer.php');
?>
