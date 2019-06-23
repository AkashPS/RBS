<?php
include('admin_header.php');
$CI =&get_instance();
$a=$CI->sessionin();
if($a==1)
{

?>


            <!-- MAIN CONTENT-->
            <!-- <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        
<br><br><br><br><br><br>
<div align="center">
                      <h1>Wellcome admin to RBS</h1>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

<?php
include('admin_footer.php');
}else{
    $CI->login();
}
?>
