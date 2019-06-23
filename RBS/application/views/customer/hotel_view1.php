<?php
include('cust_header.php');
 ?>
 <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i></h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">




                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div>
                                                                    <img src="<?php echo base_url(); ?>images/home/<?php echo $img; ?>" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="text">


                                                                <p>Address:<?php echo $addr; ?></p>
                                                                <p>Contact:<?php echo $con; ?></p>
                                                                <p>Decription:<?php echo $desc; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

  </div>


    <div class="row">

                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Room details</h3>

                                


                                <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <!-- <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label> -->
                                                    </th>
                                                    <th>Room Type</th>
                                                    <th>Total rooms</th>
                                                    <th>rate per day</th>
                                                    <!-- <th>date</th>
                                                    <th>status</th>
                                                    <th>price</th> -->
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php foreach($rooms as $row)
                                                    {
                                                    $rtypid=$row->r_id;
                                                    $roomtype=$row->r_type;
                                                    $no_of_room=$row->no_of_room;
                                                    $rate=$row->rate;
                                                     ?>
                                                <form action="<?php echo site_url("Custctrl/hotel_booking")?>"method="post" onsubmit="return" >

                                                        <tr class="tr-shadow">
                                                                <td>

                                                                </td>
                                                                <td><?php echo $roomtype; ?></td>
                                                                <td>
                                                                    <span class="block-email"><?php echo $no_of_room; ?></span>
                                                                    <h1><?php echo $rtypid; ?></h1>
                                                                </td>
                                                                <td class="desc"><?php echo $rate; ?></td>


                                                                <td>
                                        <input type="hidden" name="hotelid" value="<?php echo $hotelid; ?>">
                                        <input type="hidden" name="hotelrmid" value="<?php echo $rtypid; ?>">


                                                                        <div class="card-body">
                                                                        <button type="submit"id="view"  name="view" class="btn btn-success btn-lg active">check room</button>
                                                                         
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            </form>

                                                            <?php } ?>
                                            </tbody>
                                </table>
                                




					     	</div>
	</div>



 <?php
 include('cust_footer.php');
  ?>
