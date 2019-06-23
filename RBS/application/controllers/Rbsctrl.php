  <?php
class Rbsctrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Rbsmodel');
        $this->load->helper('url');
        $this->load->library(array('session','upload'));
        $this->load->library('email');


    }






        function sample()
        {
            $list=$this->load->view('test/sample');
            if($this->input->post('submit'))
            {
                $id=$this->input->post('id');
                $test['check']=$this->Rbsmodel->check($id);
                foreach($test['check'] as $row)
                {
                    $ints=$row->int_status;
                    $aprs=$row->apr_status;
                    echo $ints;
                    echo $aprs;


                    if($ints==1 && $aprs==0)
                    {

                        echo "request";
                    }
                    elseif($ints==1 && $aprs==1)
                    {
                        echo "home";

                    }
                    elseif($ints==0 && $aprs==1)
                    {
                        echo "blocked";

                    }
                    elseif($ints==0 && $aprs==0)
                    {
                        echo "not exist";

                    }

                }

            }

        }



    public function index()
    {
        $this->load->view('home');
    }











 public function test() // test profile line
    {
      $result['list']=$this->Rbsmodel->homelist();

      $this->load->view('test_page',$result);

    }





 public function admin_home() // test profile line
  {
       $this->load->view('admin_homes');
  }


 public function dispdata()// ADMIN VIEW FOR CUSTOMERS
 {
 $result['data']=$this->Rbsmodel->displayrecords();
 $this->load->view('test',$result);
 }



 public function owner_request()// ADMIN VIEW FOR apoval
 {
 $result['data']=$this->Rbsmodel->owner_request();
 $this->load->view('owner_request',$result);
 }



 public function view_owners() //ADMIN VIEW FOR OWNERS
{
$result['data']=$this->Rbsmodel->displayowners();
$this->load->view('owners',$result);
}


public function hotellist()
{
    $result['data']=$this->Rbsmodel->hotellist();
    $this->load->view('hotellist',$result);
}


public function adv_htlview()
{
  $hid=$this->input->post('hotelid');
  $basichid=$this->input->post('basichid');
  $bstatus=$this->input->post('bstatus');
     $result['data']=$this->Rbsmodel->adv_htlview($hid);
     foreach ($result['data'] as $row )
      {
      $sid=$row->state;
      $did=$row->district;
      $hsid=$row->hotel_state;
      $hdid=$row->hotel_district;
     }
    $result['state']=$this->Rbsmodel->state_name($sid);
$result['hstate']=$this->Rbsmodel->state_name($hsid);
$result['district']=$this->Rbsmodel->district_name($did);
$result['hdistrict']=$this->Rbsmodel->district_name($hdid);
$result['basichid']=$basichid;
$result['bstatus']=$bstatus;
// echo $bstatus;

     $this->load->view('advhotelview',$result);
}

public function email()
{
  $this->load->view('email');
}

public function checkmail()
{
try{
//   $email=$this->input->post('emailaddr');
//
//       $from_email = "admin@roady.com";
//       $this->load->library('email');
//
//       $this->email->from($from_email, 'Roady - Travel Companion');
//       $this->email->to($email);
//       $this->email->subject('Approval Success');
//       $this->email->message('We are happy to inform you that you are now a member of Roady - Travel Companion. You are approved and can provide service to your customers. You will be directed to your profile and requested to enter valid data.');
// log_message('error', $this->email->send());

$to_email = $this->input->post('emailaddr');
$num=rand(1111,9999);
//insert

$subject = 'Approval Success';
$message = 'We are happy to inform you that you are now a member of Roady - Travel Companion. You are approved and can provide service to your customers. You will be directed to your profile and requested to enter valid data.OTP:'.$num;
$headers = 'From: admin@roady.com';
mail($to_email,$subject,$message,$headers);
// ("otp",$to_email);


// log_message('error', $this->email->print_debugger());
      // if($this->email->send())
      // {
      //   $this->session->set_flashdata("msg","Mail was sent successfully.");
      // }
      // else
      // $this->session->set_flashdata("msg","Error while sending Email.");
}catch(ErrorException $e){
    log_message('error', $e);
}
      return $this->session;
      // $this->load->view('email');

}

 public function blockdata()
{
$id=$this->input->get('id');
$this->Rbsmodel->blockrecords($id);
redirect("Rbsctrl/dispdata");
}



public function unblockdata()
{
$id=$this->input->get('id');
$this->Rbsmodel->unblockrecords($id);
redirect("Rbsctrl/dispdata");
}



public function register_cust()
    {
        $this->load->view('register');
        if($this->input->post('register'))
        {
            $fn=$this->input->post('fname');
            $ln=$this->input->post('lname');
            $m=$this->input->post('mobile');
            $e=$this->input->post('email');
            $p=$this->input->post('password');
            // $encrp=md5($p);
            // $logid=$this->Rbsmodel->cust_log($e,$p);
            $result=$this->Rbsmodel->show($e);
            if($result)
                {
                    ?>
                <script>
                alert("Existing email");
                </script>
                <?php
                }
                else
                {

                $log=array('email'=>$e,'password'=>$p,'usertype'=>'customer','status'=>1,'aproval'=>1);
                $log_id=$this->Rbsmodel->cust_log($log);
                $reg=array('log_id'=>$log_id,'fname'=>$fn,'lname'=>$ln,'mobile'=>$m,'house'=>NULL,'town'=>NULL,'place'=>NULL,'district'=>NULL,'state'=>NULL,'pincode'=>NULL);



                $this->Rbsmodel->cust_reg($reg);
                ?>
                <script>
                alert("Success");
                </script>
                <?php
                // return redirect('/Rbsctrl/login');
                }
        }
    }





    public function register_deal()
    {
        $this->load->view('register_owner');
        if($this->input->post('register'))
        {
            $fn=$this->input->post('fname');
            $ln=$this->input->post('lname');
            $m=$this->input->post('mobile');
            $e=$this->input->post('email');
            $p=$this->input->post('password');
            // $encrp=md5($p);

            $result=$this->Rbsmodel->show($e);
            if($result)
                {
                    ?>
                <script>
                alert("Existing email");
                </script>
                <?php
                // $this->Rbsctrl->login;







                // redirect('/Rbsctrl/login');
                }
                else
                {

            // $userdata=array('fname'=>$fn,'lname'=>$ln,'mobile'=>$m);
            $log=array('email'=>$e,'password'=>$p,'usertype'=>'owner','status'=>1,'aproval'=>0);
            $log_id=$this->Rbsmodel->deal_log($log);
            $reg=array('log_id'=>$log_id,'fname'=>$fn,'lname'=>$ln,'mobile'=>$m,'property_name'=>NULL,'town'=>NULL,'place'=>NULL,'state'=>NULL,'district'=>NULL,'pincode'=>NULL,'id_type'=>NULL,'id_proof'=>NULL);
            $this->Rbsmodel->owner_reg($reg);
            ?>
            <script>
            alert("Success");
            </script>
            <?php                }
        }
    }




public function testd()
 {
        $this->load->view('test');

 }

    // public function login()
    // {
    //     $this->load->view('login');

    // }




    public function login()
    {
        $this->load->view('login');

    }



    function loginn() //
    {
        if($this->input->post('login'))
        {
               $e=$this->input->post('email');
               $p=$this->input->post('password');
               // $encrp=md5($p);

               $loginresult['login']=$this->Rbsmodel->checklogin($e,$p);
               if($loginresult['login'])
               {
                    foreach($loginresult['login'] as $row)
                    {
                        $id=$row->log_id;
                        $email=$row->email;
                        $password=$row->password;
                        $approval=$row->aproval;
                        $status=$row->status;
                        $type=$row->usertype;

                        if($status==1)
						{
                            if($type=='customer')//customer
								{

									$this->session->set_userdata('id',$id);
									$this->session->set_userdata('email',$email);
									$this->session->set_userdata('password',$password);

									// $this->load->view('admin_home');
									$this->load->view('customer/cust_home');
									// $session_data=array('email'=>$e,'password'=>$p);
									// $this->session->set_userdata($session_data);

									// $this->login_user();
									// echo "logged in";
                                }
                                elseif($type=='owner')
							    {
									if($approval=='1')
									{
                    $this->session->set_userdata('id',$id);
										$id=$this->session->userdata('id');
										$this->session->set_userdata('email',$email);
										$this->session->set_userdata('password',$password);
										//echo "welcome owner";.............................................registered owner.....................
                    $result['hotels']=$this->Rbsmodel->ownerhotels($id);
                    if($result['hotels'])
                    {
                      $result['val']=1;
                    }
                    else {
                      $result['val']=0;

                    }
                    $this->load->view('owner/ownerhome_page',$result);

									}

									elseif($approval=='0')
									{
										$this->session->set_userdata('id',$id);
										$this->session->set_userdata('email',$email);
										$this->session->set_userdata('password',$password);
                                       $result['owner1']=$this->Rbsmodel->ownershow($id);

                                       $result['state']=$this->Rbsmodel->state();

										//echo"complet your detsils REQUEST PAGE";..........................owner witing for admin approval.


                    $this->load->view('ownerreq_page',$result);


									} // OWNER DIRECTED TO REQUEST PAGE FOR DETAILS SUBMISSION

								  else
									{
                    $this->session->set_userdata('id',$id);
                    $this->session->set_userdata('email',$email);
                    $this->session->set_userdata('password',$password);
                    $result['owner1']=$this->Rbsmodel->ownershow($id);

                    //echo"complet your detsils REQUEST PAGE";..........................owner witing for admin approval.


                    $this->load->view('temp',$result);

									}// waiting for admin aproval so directed to request page
                                }
                                else
                                {
                                    $session_data=array('email'=>$e,'password'=>$p);
                                    $this->session->set_userdata($session_data);

                                    $this->load->view('admin_home');
                                    // echo "logged in";
                                }

                              }

                              else
                              {

                               echo "invalid";
                              }

                        }
                    }
                    else
               {
                $this->session->set_flashdata('error','Invalid username or password');
               $this->login();
                echo "incorrect email or password";
               }



        }
    }








    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('id');
        $this->index();
    }




    public function admin_home1()
    {
        $this->load->view('admin_home');
    }




    public function user_home()
    {
        $this->load->view('userhome');
    }




    public function user_owners()
    {
        $this->load->view('ownerhome');
    }




    public function check()
    {
        $this->load->view('adminhome');
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





    public function approval()
    {
        if($this->input->post('submit'))
        {
         $id=$this->input->post('logid');
         $this->Rbsmodel->approve($id);
         $this->owner_request();
        }

    }

    function ownerhome()
    {
      $id=$this->session->userdata('id');
      $result['hotels']=$this->Rbsmodel->ownerhotels($id);
      if($result['hotels'])
      {
        $result['val']=1;
      }
      else {
        $result['val']=0;

      }
      $this->load->view('owner/ownerhome_page',$result);

        // $this->load->view('owner/ownerhome_page');
    }





    function accomadation()
    {

        $this->load->view('owner/accomadation_page');
    }















    function home_reg()
    {

        $cat='HOME';
        $cat_id=$this->Rbsmodel->cat_id($cat);
        foreach($cat_id as $row)
        {
            $cat_id=$row->c_id;
            $data['cat_id']=$cat_id;
            $this->load->view('owner/home_reg',$data);

        }
        // egistration form for home
    }



        function hostel_reg()
        {

            $cat='HOSTEL';
            $cat_id=$this->Rbsmodel->cat_id($cat);
            foreach($cat_id as $row)
            {
                $cat_id=$row->c_id;
                $data['cat_id']=$cat_id;
                $this->load->view('owner/hostel_reg',$data);

            }
            //egistration form for hostel
        }




                function hotel_reg()
                {

                    $cat='HOTEL';
                    $cat_id=$this->Rbsmodel->cat_id($cat);
                    foreach($cat_id as $row)
                    {
                        $cat_id=$row->c_id;
                        $data['cat_id']=$cat_id;
                        $this->load->view('owner/hotel_reg',$data);

                    }
                    //registration form for hotel
                }

        function pg_reg()
        {

            $cat='HOTEL';
            $cat_id=$this->Rbsmodel->cat_id($cat);
            foreach($cat_id as $row)
            {
                $cat_id=$row->c_id;
                $data['cat_id']=$cat_id;
                $this->load->view('owner/pg_reg',$data);

            }
            //registration form for hotel
        }



    function home_registration()
    {


    }





    function image1()
    {


        $this->load->view('test/sample');
        $result['list']=$this->Rbsmodel->showimgs();


    }







function owner_registration()
{
  if($this->input->post('save'))
  {
      $logid=$this->session->userdata('id');
      $propname=$this->input->post('a');
      $town=$this->input->post('b');
      $palce=$this->input->post('c');
      $state=$this->input->post('state');
      $dis=$this->input->post('district');
      $pin=$this->input->post('f');
      $id=$this->input->post('g');
      $did=$this->input->post('deal_id');

      $fileimg= time().$_FILES['file1']['name'];
      $path='../RBS/images/home/';
      move_uploaded_file($_FILES['file1']['tmp_name'],$path.$fileimg);

      $propname=$this->input->post('h');

      $fileimg1= time().$_FILES['file2']['name'];
      $path='../RBS/images/home/';
      move_uploaded_file($_FILES['file2']['tmp_name'],$path.$fileimg1);
      $query=array('property_name'=>$propname,'town'=>$town,'place'=>$palce,'state'=>$state,'district'=>$dis,'pincode'=>$pin,'id_type'=>$id,'id_proof'=>$fileimg,'prop_proof'=>$propname,'prop_doc'=>$fileimg1);

// echo $query;
          $this->Rbsmodel->ownerregreq($query,$did,$logid);
          $this->Rbsmodel->ownerregreq1($logid);
         ?>
         <script>
         alert("Requested for approval");
         </script>
<?php

$this->logout();

  }
}






    function ownerprofile()
    {
      $logid = $this->session->userdata('id');
      $data['owner']=$this->Rbsmodel->ownerpro($logid);
      $this->load->view('owner/ownerprofle',$data);
    }




function testpage()
{
  // $data['type']=$this->Rbsmodel->roomtype();
   $result['state']=$this->Rbsmodel->state();
  $this->load->view('owner/registration/hotel_reg',$result);
}




public function sel_district1()
{

    $type=array();
        $i=0;
      $state_id=$this->input->get('state');
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
public function sel_district2()
{

    $type=array();
        $i=0;
      $state_id=$this->input->get('state');
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


function hotelblockadm()
{
  $bhid=$this->input->post('bhid');

  $this->Rbsmodel->hotelblockadm($bhid);
  $this->load->view('admin_home');


}

function admincard()
{
  $name="ADMIN";
  $cno='1212121212121212';

  $admin['res']=$this->Rbsmodel->admincard($name,$cno);
  $this->load->view('admin_card',$admin);


}

function encrp()
{
  $a="akash";
  echo $a;
  ?><br>
  <?php
  $encrp=md5($a);
  echo $encrp;
}


}
?>
