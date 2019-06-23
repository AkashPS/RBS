<?php
include('admin_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{
?>
<br><br><br><br>
  <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Accout details</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <!-- left    things -->
                                            </div>
                                            <div class="chart-info__right">

                                                <div class="chart-statis mr-0">

                                                </div>
                                            </div>
                                        </div>

  <form action="<?php echo site_url("Rbsctrl/checkmail")?>"method="post" onsubmit="return" >
                                        


                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Card No:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="emailaddr" name="emailaddr"  class="form-control" ">
                                                   
                                                </div>
                                        </div>

                                        <button type="submit" id="check" name="check"class="btn btn-success btn-lg active">check room</button>
                                
</form>

                                    </div>
                                </div>
                            </div>




<?php
include('admin_footer.php');
}
?>
