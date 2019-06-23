<?php
class Custctrl extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('Custmodel');
      $this->load->model('Rbsmodel');

      $this->load->helper('url');
      $this->load->library(array('session','upload'));


  }

public function home1()
{
  $this->load->view('customer/cust_home');

}




public function cust_bookings()
{

  $logid=$this->session->userdata('id');

  // $data['lid']=$lid;
  $data['res']=$this->Custmodel->booking_view($logid);

  if($data['res'])
  {
    // print_r ($data['res']);
   $this->load->view('customer/cust_bookings',$data);
  }
  else
    {
      echo "no bookings";
    }

  //
}



public function hotels_list()
{
  $this->load->view('customer/hotels_list');
}

public function hotels()
  {
    $hotelid=$this->input->post('hotelid');

    $data['hotel']=$this->Custmodel->hotels();
    $this->load->view('customer/hotels',$data);
  }


  public function hotel_view($hid)
{
$data['hotel']=$this->Custmodel->hotel_details($hid);
$data['hotels']=$this->Custmodel->hotel_detailss($hid);

    $this->load->view('customer/hotel_view',$data);

  }




  public function hotelview()
    {
      $data['state']=$this->Rbsmodel->state();
      $data['hotel']=$this->Custmodel->hotels();
      $this->load->view('customer/hotels',$data);
    }


public function filtersearch()
  {
    $dist=$this->input->post('district');
    $data['state']=$this->Rbsmodel->state();
    $data['hotel']=$this->Custmodel->filtersearch($dist);
    $this->load->view('customer/filter_search',$data);
  }


public function hotel_booking()
  {
    $hid=$this->input->post('hotelid');
    $hrmid=$this->input->post('hotelrmid');
    $roomrate=$this->input->post('roomrate');

    $data['hid']=$hid;
    $data['hrmid']=$hrmid;
    $data['roomrate']=$roomrate;

 $this->load->view('customer/hotel_booking',$data);
  }


  public function hotel_book()
    {

          $hid=$this->input->post('hotelid');
          $hrmid=$this->input->post('hotelrmid');
          $strdate=$this->input->post('txtFrom');
          $enddate=$this->input->post('txtTo');
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
               //kodtha from date
   				    // echo "<br>" ; //FROMDATE edkkum nammal kodthadhil ninnn
   				    // echo "currentdate:".$currDate."</br>";
              $b[$i]=$this->Custmodel->datefromdatabase($hid,$hrmid,$currDate);


              //
     			    // 		// echo (string)$fromdate."<br/>";
   			    	// 	$dbfromdate = $row->fromdate;
   			    	// 	$dbtodate = $row->todate;
   			    	// 	// $interval = $date1->diff($date2);
   			    	// 	// print_r( $interval->format('%R%a days') );
   			    	// 	// echo ":datediff<br>";
   			    	// 	// echo strtotime($value);
              //
   			    	// 		if(strtotime($dbfromdate) <= strtotime($currDate) && strtotime($dbtodate) > strtotime($currDate) || strtotime($dbfromdate) == strtotime($currDate) || strtotime($dbtodate) == strtotime($currDate)) //nammal kodtha value databaseil undengil.   flag=1 . $row enandg $a[i] loooot edth vechu. enitt i increment cheyyum. next save cheyyumbo a[2] yiloot akum save cheyyuka
              //
   			    	// 		{
              //
              //
              //
   			    	// 			$flag =1;
   			    	// 			$a[$i]=$row->carid;
   			    	// 			$i++;
   			    	// 			// break;
              //
              //
   			    	// 		}
$i++;
   			    	}
// for ($i=0; $i <sizeof($b) ; $i++) {
//   print_r( $b[$i]);
// }

// print_r( $b);

// ...........................................................................................
 $data['hid']=$this->input->post('hotelid');
 $data['hrmid']=$this->input->post('hotelrmid');
$data['s_date']=$strdate;
$data['e_date']=$enddate;
 $data['roomrate']=$roomrate;
// $data['logid']=$custid

// ............... varibles to pass the specific date and it's availabilty of rooms................
$data['date']=$a;
$data['count']=$b;
// ................................................................................................
$date1 = date_create($strdate);
$date2 = date_create($enddate);

$dateDiff = date_diff($date1, $date2)->days;
$data['dateDiff']=$dateDiff;


$this->load->view('customer/viewcount',$data);

	}




   public function logid()
   {
     $logid = $this->session->userdata('id');
     return $logid;
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



       public function login()
       {
           $this->load->view('login');

       }




        public function payment()
        {
          $data['hid']=$this->input->post('hid');

          $data['hrmid']=$this->input->post('hrmid');

          $data['s_date']=$this->input->post('txtFrom');

          $data['e_date']=$this->input->post('txtTo');

           $data['norm']=$this->input->post('no_of_room');
           $data['trate']=$this->input->post('trate');

          $this->load->view('customer/payment',$data);

        }


      public function payandbook()
        {



              $hid=$this->input->post('hid');
              $hrmid=$this->input->post('hrmid');
              $strdate=$this->input->post('s_date');
              $enddate=$this->input->post('e_date');
              $norm=$this->input->post('norm');
              $custid=$this->input->post('l_id');
              $amount=$this->input->post('ammount');

              $data['cardno']=$this->input->post('cno');
              $data['cardname']=$this->input->post('cname');
              $data['month']=$this->input->post('month');
              $data['year']=$this->input->post('year');
              $data['cvv']=$this->input->post('cvv');

              $result['res'] = $this->Custmodel->checkpayment($data);
              if($result['res'])
              {
                foreach ($result['res'] as $key)
                 {
                $t_amount=$key->amount;

                }

                if($t_amount>=$amount)
                {

                      $upbal=$t_amount - $amount;
// ................................................booking table field
                      $query=array('hid'=>$hid,'hrid'=>$hrmid,'logid'=>$custid,'startdate'=>$strdate,'enddate'=>$enddate,'norooms'=>$norm,'amount'=>$amount,'cardno'=>$data['cardno'],'status'=>1);
                      $this->Custmodel->hotel_book($query);
// ................................................................................
// ..................................................update customer account...............
                      $this->Custmodel->update_account_cust($upbal,$data['cardno']);
// ..................................................update admin account...............

                      $name="ADMIN";
                      $cno='1212121212121212';

                      $admin['res']=$this->Custmodel->admincard($name,$cno);
                      $upamount=$admin['res'] + $amount ;

                      $this->Custmodel->update_account_admin($name,$cno,$upamount);

// .........................................................................................................

              $this->load->view('customer/cust_home');

                }
                else{
                  echo "insuffcient balance";
                }
              }
              else{
                echo "invalid credential";
              }

        }

          public function cancelbook()
            {
              $bid=$this->input->post('bhid');
              $this->Custmodel->cancelbook($bid);

              $logid=$this->session->userdata('id');

              $data['res']=$this->Custmodel->booking_view($logid);

                if($data['res'])
                {
                  // print_r ($data['res']);
                 $this->load->view('customer/cust_bookings',$data);
                }
                else
                  {
                    ?><script>
                      alert("no booking");
                    </script>
                    <?php
                  $this->load->view('customer/cust_homepage');
                  }




            }
            public function cust_homepage1()
            {
              $this->load->view('customer/cust_home');

            }


            public function filter()
            {
                 $result['state']=$this->Rbsmodel->state();

               $this->load->view('customer/filter_search',$result);

            }


            public function sel_district1()
            {

                $type=array();
                    $i=0;
                  $state_id=$this->input->post('state');
                //  echo $state_id;
                $dist['data']=$this->Rbsmodel->sel_district($state_id);
                foreach($dist['data'] as $row)
                {
                    $did=$row->did;
                    $name=$row->dname;
                    $type[$i]['id']=$did;
                    $type[$i]['name']=$name;
                    $i++;
                }
                echo json_encode($type);

            }







}
?>
