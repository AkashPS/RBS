<?php
class Ownerctrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Rbsmodel');
        $this->load->model('Custmodel');
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','upload'));

    }

       public function logid()
       {
         $logid = $this->session->userdata('id');
         return $logid;
       }
       public function login()
       {
           $this->load->view('login');

       }




    function sessionin()
    {
        $email = $this->session->userdata('email');
        $passwd = $this->session->userdata('password');
        $id = $this->session->userdata('id');


        $loginres['res'] = $this->Rbsmodel->checklogin($email,$passwd);

        if( $loginres['res']){
          return(1);
        }else {
          return(0);
        }
    }



    public function home_registration()
    {
        if($this->input->post('save'))
        {
            $lid=$this->input->post('l_id');
            $cid=$this->input->post('c_id');

            $property=array('log_id'=>$lid,'c_id'=>$cid);
            $pid=$this->Rbsmodel->addproperty($property);
            $hname=$this->input->post('a');
            $add=$this->input->post('b');
            $contact=$this->input->post('c');
            $pincode=$this->input->post('d');
            $longitude=$this->input->post('e');
            $dis=$this->input->post('g');


                $homeimg=$this->input->post('homeimg');

                $homeimg= time().$_FILES['homeimg']['name'];
                $path='../RBS/images/home/';
                move_uploaded_file($_FILES['homeimg']['tmp_name'],$path.$homeimg);

                $lati=$this->input->post('f');



                $query=array('p_id'=>$pid, 'log_id'=>$lid,'home_name'=>$hname,'address'=>$add, 'contact'=>$contact, 'pincode'=>$pincode, 'longitude'=> $longitude,'latitude'=>$lati, 'image'=>$homeimg,'discription'=>$dis);


                $this->Rbsmodel->inserthome($query);
                echo 'success';

        }

  }






      public function hostel_registration()
      {
          if($this->input->post('save'))
          {
              $lid=$this->input->post('l_id');
              $cid=$this->input->post('c_id');

              $property=array('log_id'=>$lid,'c_id'=>$cid);
              $pid=$this->Rbsmodel->addproperty($property);
              $hname=$this->input->post('a');
              $add=$this->input->post('b');
              $contact=$this->input->post('c');
              $pincode=$this->input->post('d');
              $longitude=$this->input->post('e');
              $dis=$this->input->post('g');


                  $homeimg=$this->input->post('homeimg');

                  $homeimg= time().$_FILES['homeimg']['name'];
                  $path='../RBS/images/home/';
                  move_uploaded_file($_FILES['homeimg']['tmp_name'],$path.$homeimg);

                  $lati=$this->input->post('f');



                  $query=array('p_id'=>$pid, 'log_id'=>$lid,'hostel_name'=>$hname,'address'=>$add, 'contact'=>$contact, 'pincode'=>$pincode, 'longitude'=> $longitude,'latitude'=>$lati, 'image'=>$homeimg,'discription'=>$dis);


                  $this->Rbsmodel->inserthostel($query);
                  echo 'success';

          }

    }






          public function hotel_registration()
          {
            echo "hi";
              if($this->input->post('save'))
              {
                  $lid=$this->input->post('l_id');
                  $cid=$this->input->post('c_id');
                  $hid=$this->input->post('h_id');

                  $property=array('log_id'=>$lid,'c_id'=>$cid);
                  $pid=$this->Rbsmodel->addproperty($property);
                  $hname=$this->input->post('hname');
                  $add=$this->input->post('hadd');
                  $contact=$this->input->post('mobile');
                  $pincode=$this->input->post('hpin');
                  $longitude=$this->input->post('e');
                  $latitude=$this->input->post('f');
                  $dis=$this->input->post('g');


                      $homeimg=$this->input->post('homeimg');

                      $homeimg= time().$_FILES['homeimg']['name'];
                      $path='../RBS/images/home/';
                      move_uploaded_file($_FILES['homeimg']['tmp_name'],$path.$homeimg);

                      $lati=$this->input->post('f');



                      $query=array('h_id'=>$hid,'p_id'=>$pid, 'log_id'=>$lid,'hotel_name'=>$hname,'address'=>$add, 'contact'=>$contact, 'pincode'=>$pincode, 'longitude'=> $longitude,'latitude'=>$latitude, 'image'=>$homeimg,'discription'=>$dis);

                      $hotel_id=$this->Rbsmodel->inserthotel($query);
                      // $data['hotid']=array('hid'=>$hostel_id);
                      // echo $hostel_id;
                      $data['type']=$this->Rbsmodel->roomtype();
                      $this->session->set_userdata('hotelid',$hotel_id);
                      $data['hid']=$this->session->userdata('hotelid');

                      $this->load->view('owner/hotel_room',$data);


              }

                    if($this->input->post('add'))
                    {
                $data['type']=$this->Rbsmodel->roomtype();
                $data['hid']=$this->session->userdata('hotelid');
                $this->load->view('owner/hotel_room',$data);
              }

        }

public function hoetlroom_registration()
        {

            if($this->input->post('add'))
            {

                    $hid=$this->input->post('h_id');
                    $rid=$this->input->post('category');
                    $rno=$this->input->post('room_n');
                    $rate=$this->input->post('room_r');
                    $sta=1;




                    $query=array('h_id'=>$hid,'r_id'=>$rid,'no_of_room'=>$rno,'rate'=>$rate,'status'=>$sta );


                    $hid=$this->Rbsmodel->inserthotelroom($query);

                    $this->hotel_registration();


            }

        }




public function pg_registration()
{
    if($this->input->post('save'))
    {
        $lid=$this->input->post('l_id');
        $cid=$this->input->post('c_id');

        $property=array('log_id'=>$lid,'c_id'=>$cid);
        $pid=$this->Rbsmodel->addproperty($property);
        $hname=$this->input->post('a');
        $add=$this->input->post('b');
        $contact=$this->input->post('c');
        $pincode=$this->input->post('d');
        $longitude=$this->input->post('e');
        $dis=$this->input->post('g');


            $homeimg=$this->input->post('homeimg');

            $homeimg= time().$_FILES['homeimg']['name'];
            $path='../RBS/images/home/';
            move_uploaded_file($_FILES['homeimg']['tmp_name'],$path.$homeimg);

            $lati=$this->input->post('f');



            $query=array('p_id'=>$pid, 'log_id'=>$lid,'pg_name'=>$hname,'address'=>$add, 'contact'=>$contact, 'pincode'=>$pincode, 'longitude'=> $longitude,'latitude'=>$lati, 'image'=>$homeimg,'discription'=>$dis);


            $hid=$this->Rbsmodel->insertpg($query);
            echo 'success';

    }

}






function hotelmain_reg()
{



    $aadhaar=$this->input->post('adhar');
    $fullname=$this->input->post('fullname');
    $fathername=$this->input->post('fathername');
    $gender=$this->input->post('gender'); // NEED TO SPECIFY AUTO VALUE

    $owneradd=$this->input->post('postaladdress');
    $village=$this->input->post('village');
    $taluk=$this->input->post('taluk');
    $state=$this->input->post('state');
    $district=$this->input->post('district');
    $pincode=$this->input->post('pinode');
    $mobile=$this->input->post('mobile');
    $email=$this->input->post('email');
    $hotelname=$this->input->post('hotelname');
    $hoteladd=$this->input->post('hoteladdress');
    $hotelvillage=$this->input->post('hotelvillage');
    $hoteltaluk=$this->input->post('hoteltaluk');
    $hotelstate=$this->input->post('state1');
    $hoteldistrict=$this->input->post('district1');
    $hotelloc=$this->input->post('hotellocarea');
    $hotelpincode=$this->input->post('hotelpincode');
    $hotelarea=$this->input->post('hotelarea');
    $hotelowner=$this->input->post('hotelowner');
    $hotellicenseno=$this->input->post('hotellicense');
  // $ownerid_proof=$this->input->post('l_id');
  // $hotellicense=$this->input->post('l_id');


          $query=array('aadhaar'=>$aadhaar, 'fullname'=>$fullname, 'father_name'=>$fathername, 'gender'=>$gender, 'owner_add'=>$owneradd, 'village'=>$village, 'taluk'=>$taluk, 'state'=>$state, 'district'=>$district, 'pincode'=>$pincode, 'mobile'=>$mobile, 'email'=>$email,
                       'hotel_name'=>$hotelname, 'hotel_add'=>$hoteladd, 'hotel_village'=>$hotelvillage, 'hotel_taluk'=>$hoteltaluk, 'hotel_state'=>$hotelstate,'hotel_district'=>$hoteldistrict, 'hotel_locarea'=>$hotelloc, 'hotel_pincode'=>$hotelpincode, 'hotel_area'=>$hotelarea,
                       'hotel_owner'=>$hotelowner, 'hotel_license_no'=>$hotellicenseno);

 $data['hid']=$this->Rbsmodel->insertmainhotel($query);
    $this->load->view('owner/registration/hotel_reg1',$data);

}






function editprofile()
{
      $logid = $this->session->userdata('id');
      $data['owner']=$this->Rbsmodel->ownerpro($logid);
      $this->load->view('owner/editprofile',$data);


}



function imgup()
{
  $h_id=$this->input->post('h_id');
  $homeimg=$this->input->post('homeimg');
  $homeimg1=$this->input->post('homeimg1');

  $homeimg= time().$_FILES['homeimg']['name'];
  $path='../RBS/images/hotel/';
  move_uploaded_file($_FILES['homeimg']['tmp_name'],$path.$homeimg);

  $propname=$this->input->post('h');

  $homeimg1= time().$_FILES['homeimg1']['name'];
  $path='../RBS/images/hotel/';
  move_uploaded_file($_FILES['homeimg1']['tmp_name'],$path.$homeimg1);

  $query=array('owner_id_proof'=>$homeimg,'hotel_license'=>$homeimg1);
  $this->Rbsmodel->img_update($h_id,$query);
$data['h_id']=$h_id;

$h=$h_id;
$hotelbasic=$this->Rbsmodel->hotelbasic($h);
foreach($hotelbasic as $row)
{
    $hotelname=$row->hotel_name;
    $data['htlname']=$hotelname;

    $hoteladdr=$row->hotel_add;
    $data['htladr']=$hoteladdr;

    $hotelpin=$row->hotel_pincode;
    $data['htlpin']=$hotelpin;

}




                    $cat='HOTEL';
                    $cat_id=$this->Rbsmodel->cat_id($cat);
                    foreach($cat_id as $row)
                    {
                        $cat_id=$row->c_id;
                        $data['cat_id']=$cat_id;

                    }
                    $this->load->view('owner/hotel_reg',$data);


}



function editedprofile()
{
    echo  $logid = $this->session->userdata('id');


      $fname=$this->input->post('a');
      $lname=$this->input->post('b');
      $mobile=$this->input->post('c');
      $proname=$this->input->post('d');
      $town=$this->input->post('e');
      $place=$this->input->post('f');
      $state=$this->input->post('g');
      $district=$this->input->post('h');
      $pincode=$this->input->post('i');

      $query=array('fname'=>$fname,'lname'=>$lname,'mobile'=>$mobile,'property_name'=>$proname,'town'=>$town,'place'=>$place,'state'=>$state,'district'=>$district,'pincode'=>$pincode,);

      $this->Rbsmodel->ownerproup($logid,$query);

      $this->load->view('owner//ownerhome_page');


}

public function hotel_view($hid)
{
  $data['hid']=$this->input->post('hotelid');
  $data['hotel']=$this->Custmodel->hotel_details($hid);
  $data['hotels']=$this->Custmodel->hotel_detailss($hid);
  $this->load->view('owner/ownerhotels',$data);

}

public function hotel_bookings()
{
  $hid=$this->input->post('hotelid');
  // echo $hid ;
  $data['hotel']=$this->Rbsmodel->hotel_bookings($hid);
  // $data['hotels']=$this->Custmodel->hotel_detailss($hid);
  $this->load->view('owner/hotel_bookings',$data);

}
function booking_total()
{
  $hid=$this->input->post('hotelid');
  // echo $hid ;
  $data['rate']=$this->Rbsmodel->total_rate($hid);
  $this->load->view('owner/total_rates',$data);

}




public function owner_home1()
{


  $id=$this->session->userdata('id');
  $result['hotels']=$this->Rbsmodel->ownerhotels($id);
  $this->load->view('owner/ownerhome_page',$result);

}


public function hotel_booking()
  {
      $hid=$this->input->post('hotelid');
      $hrmid=$this->input->post('hotelrmid');
      $roomrate=$this->input->post('roomrate');
      $data['logid']=$this->session->userdata('id');

      $data['hid']=$hid;
      $data['hrmid']=$hrmid;
      $data['roomrate']=$roomrate;

 $this->load->view('owner/hotel_booking',$data);
  }

  public function hotel_block()
    {
      $hid=$this->input->post('hotelid');
      $hrmid=$this->input->post('hotelrmid');
      $strdate=$this->input->post('checkin');
      $enddate=$this->input->post('checkout');
      $norm=$this->input->post('norm');
      $custid=$this->input->post('logid');
      $query=array('hid'=>$hid,'hrid'=>$hrmid,'logid'=>$custid,'startdate'=>$strdate,'enddate'=>$enddate,'norooms'=>$norm);
      // $this->Custmodel->inserthome($query);

  // $this->load->view('customer/hotel_book',$data);

     $this->Custmodel->hotel_book($query);

    }






     function searchrooms()    //buttonil click cheyyumboyaan ee function wrk cheyyunnadh
     		{

                    $hid=$this->input->post('hotelid');
                    $hrmid=$this->input->post('hotelrmid');
                    $strdate=$this->input->post('txtFrom');
                    $enddate=$this->input->post('txtTo');
                    $norm=$this->input->post('norm');
                    $custid=$this->input->post('logid');
                    $roomrate=$this->input->post('roomrate');

          	$a=array();
            $b=array();
     			 		$period = new DatePeriod(
     			     new DateTime($strdate),
     			     new DateInterval('P1D'),
     			     new DateTime(date('Y-m-d', strtotime("+1 Day", strtotime($enddate)))  )
     										);



     				$i=0;
     				foreach ($period as $key => $value)
     				 {
     					 $flag=0;

     				    $currDate = $value->format('Y-m-d') ;
                $a[$i]=$currDate;

                $b[$i]=$this->Custmodel->datefromdatabase($hid,$hrmid,$currDate);


  $i++;
     			    	}


  // print_r( $b);
  $data['hid']=$hid;
  $data['hrmid']=$hrmid;
  $data['roomrate']=$roomrate;


    $data['s_date']=$strdate;
  $data['e_date']=$enddate;

  $data['date']=$a;
  $data['count']=$b;
  $this->load->view('Owner/veiwcount',$data);

     				}






}
