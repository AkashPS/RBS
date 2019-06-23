<?php
class Testctrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Testmodel');
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','upload'));


    }


    public function fileup() // test the file upload function
       {

         $this->load->view('test/fileupload');

       }


   public function upfile()
   {

    // $fileimg=$this->input->post('file1');

     $fileimg= time().$_FILES['file1']['name'];
     $path='../RBS/images/home/';
     move_uploaded_file($_FILES['file1']['tmp_name'],$path.$fileimg);

     // $fileimg1=$this->input->post('file2');
     $fileimg1= time().$_FILES['file2']['name'];
     $path='../RBS/images/home/';
     move_uploaded_file($_FILES['file2']['tmp_name'],$path.$fileimg1);
      $stat=0;
      $intst=0;
      $aprst=0;
      $query=array('status'=>$stat,'int_status'=>$intst,'apr_status'=>$aprst,'file'=>$fileimg,'file1'=>$fileimg1);
      $this->Testmodel->upfile($query);


   }

   //
   // public function empty() // test the file upload function
   //    {
   //      // sessionin
   //
   //      $id=$this->input->get('id');
   //      // $result=$this->Testmodel->empty();
   //      $empty['res'] = $result=$this->Testmodel->empty();
   //
   //
   // foreach($empty as $row){
   //  if(!(empty($row))){
   //
   //   echo "Success";
   //  }else{
   //   echo 'No data   found!';
   //  }
   // }




    public function buttonif() // test the file upload function
       {

         $t=$this->input->post('txtTo');


         if ($t < "20") {
              echo "yes !";?>
              <input type="button" name="btn">akash</button>
            <?php
          }
             else {
                            echo "no!";
                                }


          }


    public function count() // test the file upload function
       {
         $bhid=$this->input->post('user');
          $status=1;
          echo $bhid;
          echo $status;
        $count['res']=$this->Testmodel->count($bhid,$status);
        $this->load->view('test/result',$count);

       }





  }
  ?>
