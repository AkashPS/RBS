<?php

class  Rbsmodel extends CI_Model
{

    function cust_log($log)
    {
        $this->db->insert('login',$log);
        $insert_id=$this->db->insert_id();
        return $insert_id;
    }





    function check($id)
    {
        $q=$this->db->get_where('test',array('id'=>$id));

        return $q->result();
    }

function total_rate($hid)
{
  $query=$this->db->query("SELECT MONTHNAME(startdate) AS month,year(startdate) as year,sum(amount)as amount FROM `tbl_hotelbooking` WHERE  hid='".$hid."'  GROUP BY YEAR(startdate), MONTH(startdate) DESC");
  return $query->result();
}
    function hotel_bookings($hid)
    {
      $query=$this->db->query("SELECT * FROM tbl_hotelbooking,cust_reg WHERE tbl_hotelbooking.logid=cust_reg.log_id and tbl_hotelbooking.hid ='".$hid."'");
      return $query->result();
    }





    function cust_reg($reg)
    {
        $this->db->insert('cust_reg',$reg);

    }




    function deal_log($log)
    {
        $this->db->insert('login',$log);
        $insert_id=$this->db->insert_id();
        return $insert_id;

    }










    function addproperty($val)
    {
        $this->db->insert('tbl_property',$val);
        $insert_id=$this->db->insert_id();
        return $insert_id;

    }




    function owner_reg($reg)
    {
        $this->db->insert('owner_reg',$reg);

    }







    function inserthome($query)
    {


        $this->db->insert('tbl_home',$query);

    }





    function show($email)
    {
        $query=$this->db->query("select * from login where email='".$email."'");
        return $query->result();
    }





    function showlog($email)
    {
        $query=$this->db->query("select * from login where email='".$email."'");
        return $query->result();
    }








    function checklogin($email,$password)
    {
        $query=$this->db->query("select * from login where email='".$email."' and password='".$password."'");
        return $query->result();
    }








    function displayrecords()
 	{
 	$query=$this->db->query("select * from cust_reg");
 	return $query->result();
     }









     function owner_request_list()
 	{
 	$query=$this->db->query("select log_id from login where aproval=0");
 	return $query->result();
     }









  function displayowners()
{
$query=$this->db->query("select * from owner_reg");
return $query->result();
}










  function blockrecords($id)
{
$this->db->query("UPDATE `login` SET `status`=0 where `log_id`  ='".$id."'");
}











function unblockrecords($id)
{
$this->db->query("UPDATE `login` SET `status`=1 where `log_id`  ='".$id."'");
}







function owner_request()
{
    $this->db->select('*')->from('owner_reg')->join('login', 'login.log_id = owner_reg.log_id');
    $query=$this->db->get();

    return $query->result();
}









function approve($id)
{
        $this->db->set('aproval',1);
        $this->db->where('log_id',$id);
        $this->db->update('login');

}

function cat_id($cat)
{
    $query=$this->db->query("select `c_id` from tbl_category where `c_name` ='".$cat."'");
    return $query->result();
}




function showimgs($catt)
{
$query=$this->db->get_where('tbl_home');
return $query->result();
}










function ownershow($id)
{
$query=$this->db->get_where('owner_reg',array('log_id'=>$id));
return $query->result();
}









function homelist()
{
  $query = $this->db->get_where('tbl_home');
  		return $query->result();
}


function ownerregreq($query,$deal_id)
{
  $this->db->where('deal_id',$deal_id);
  $this->db->update('owner_reg',$query);



  		// return $query->result();
}
function ownerregreq1($logid)
{

  $this->db->set('aproval',2);
  $this->db->where('log_id',$logid);
  $this->db->update('login');

  		// return $query->result();
}



function upfile($query)
   {


       $this->db->insert('test',$query);

   }




function ownerpro($id)
{
$query=$this->db->get_where('owner_reg',array('log_id'=>$id));
return $query->result();
}






function inserthostel($query)
{

    $this->db->insert('tbl_hostel',$query);

}




function inserthotel($query)
{

    $this->db->insert('tbl_hotel',$query);
    $insert_id=$this->db->insert_id();
    return $insert_id;
}



function insertpg($query)
{

    $this->db->insert('tbl_pg',$query);

}


function roomtype()
{

    $result=$this->db->get('tbl_roomtyp');
    return $result->result();
}




function inserthotelroom($query)
{

    $this->db->insert('tbl_h_room_dtls',$query);

}
function state_name($id)
{

  $this->db->select('sname');
  $this->db->where(array('id'=>$id));
  $que=$this->db->get('tbl_state');
  $res=$que->row();
  $id=substr($res->sname,0);
  return $id;

}
function district_name($id)
{

  $this->db->select('dname');
  $this->db->where(array('did'=>$id));
  $que=$this->db->get('tbl_district');
  $res=$que->row();
  $id=substr($res->dname,0);
  return $id;

}




function states()
{

	$querys=$this->db->get_where('state');
	return $querys->result();
}



function insertmainhotel($query)
{

    $query=$this->db->insert('main_hotel_registration',$query);
    $insert_id=$this->db->insert_id();
    return $insert_id;
}

function img_update($h_id,$query)
{
  $this->db->set($query);
  $this->db->where('hid',$h_id);
  $this->db->update('main_hotel_registration');
}




function ownerproup($lid,$query)
{
  $this->db->set($query);
  $this->db->where('log_id',$lid);
  $this->db->update('owner_reg');
}





function ownerhotels($id)
{
  $query=$this->db->get_where('tbl_hotel',array('log_id'=>$id));
  return $query->result();
}




function state()
{
    $query=$this->db->query("select * from tbl_state");
    return $query->result();
}




function sel_district($s_id)
{
        $querys=$this->db->query("select * from tbl_district where sid='".$s_id."' ");
    // $querys=$this->db->get_where('f_type',array('category_id'=>$cat));
    return $querys->result();

}



function hotelbasic($h)
{
    $query=$this->db->query("select * from main_hotel_registration where `hid` ='".$h."'");
    return $query->result();
}


function hotellist()
{
  $query=$this->db->query("select * from tbl_hotel");
  return $query->result();
}

function adv_htlview($hid)
{
  $query=$this->db->query("SELECT * FROM `main_hotel_registration` WHERE `hid` ='".$hid."'");
  return $query->result();
}


function hotelblockadm($id)
{
$this->db->query("UPDATE `tbl_hotel` SET `status`=0 WHERE `hotel_id`='".$id."'");
}

function admincard($name,$cno)
{
  $query=$this->db->query("SELECT * FROM `tbl_bank_details` WHERE `cardno` ='".$cno."'and `cardname` ='".$name."' ");
  return $query->result();
}

}
?>
