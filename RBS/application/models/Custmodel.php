<?php

class  Custmodel extends CI_Model
{

      function hotels()
      {
        $query=$this->db->get('tbl_hotel');
        return $query->result();
      }

      function hotel_details($hid)
      {
        $query=$this->db->get_where('tbl_hotel',array('hotel_id'=>$hid));
        return $query->result();
      }
      function hotel_detailss($hid)
      {
        $this->db->join('tbl_roomtyp','tbl_h_room_dtls.r_id=tbl_roomtyp.r_id','inner');
        $query=$this->db->get_where('tbl_h_room_dtls',array('h_id'=>$hid));
        return $query->result();
      }


      function rooms($hotelid)
      {

        //$this->db->join('tbl_hotel','tbl_h_room_dtls.h_id=tbl_hotel.hotel_id','inner');
        $this->db->join('tbl_roomtyp','tbl_h_room_dtls.r_id=tbl_roomtyp.r_id','inner');

        // $query=$this->db->get_where('tbl_h_room_dtls',array('h_id'=>'$hotelidd') );
        $query=$this->db->get_where('tbl_h_room_dtls',array('h_id'=>$hotelid));
        return $query->result();
      }


function datefromdatabase($hid,$hrmid,$currDate)
{
  $query=$this->db->query("select (SELECT no_of_room as val1 FROM `tbl_h_room_dtls` WHERE h_id=$hid and r_id=$hrmid )-( SELECT IFNULL((SELECT sum(norooms) as val2 FROM `tbl_hotelbooking` WHERE status=1 and hid=$hid and hrid=$hrmid and startdate<='$currDate' AND enddate >='$currDate' order by hid),0)) as rooms");
  return $query->result();
}


function hotel_book($query)
{
  $this->db->insert('tbl_hotelbooking',$query);
}





function checkpayment($query)
{

$val=$this->db->get_where('tbl_bank_details',$query);
return $val->result();
}


function update_account_cust($a,$b)
{

$this->db->query("UPDATE `tbl_bank_details` SET `amount`='".$a."' where `cardno`  ='".$b."'");
}


function admincard($name,$cno)
{

  $this->db->select('amount');
  $this->db->where(array('cardname'=>$name, 'cardno'=>$cno));
  $que=$this->db->get('tbl_bank_details');
  $res=$que->row();
  $id=substr($res->amount,0);
  return $id;

}


function update_account_admin($a,$b,$c)
{

$this->db->query("UPDATE `tbl_bank_details` SET `amount`='".$c."' where `cardno`  ='".$b."' and `cardname`  ='".$a."'");
}
function booking_view($logid)
{
  $a=1;
$result=$this->db->query("SELECT * from `tbl_hotelbooking` as a JOIN `tbl_hotel` as b on a.hid=b.h_id WHERE `logid`= '".$logid."'and a.status  ='".$a."'");
return $result->result();
}


function cancelbook($bid)
{
  $c=0;

$this->db->query("UPDATE `tbl_hotelbooking` SET `status`='".$c."' where `bokid`  ='".$bid."'");
}
function filtersearch($did)
{
  $result=$this->db->query("SELECT * from `main_hotel_registration` as a JOIN `tbl_hotel` as b on a.hid=b.h_id WHERE a.hotel_district='".$did."'");

return  $result->result();



}
}
?>
