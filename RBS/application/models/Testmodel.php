<?php

class Testmodel extends CI_Model
{



function upfile($query)
   {
       $this->db->insert('test',$query);
   }

   function empty()
      {
        $query=$this->db->query(" select * from test ");
        return $query-> result();
      }



      function count($a,$b)
         {
           $query=$this->db->query("SELECT * FROM `login`  WHERE `usertype`='".$a."' and `status`='".$b."'");
           return $query->result();
         }










}
?>
