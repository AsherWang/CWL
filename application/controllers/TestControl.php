<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-09 23:05:05
 */
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url');
	$this->load->model('schedule_model');
	
  }

  //SuperManagerPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
   // 
   // 
    
    $data['title'] = 'testpage';
    //$this->user_model->MakeUnvalid(1,-1);
    //$as=array('ID_number' => '546415446327841541', 'Password' => 'lovelive' ,'Name' => '小2李' ,'Autority' => 1, 'Credit_Rate' => 1, 'Max_Order_Sum' => 0);

    //$data["value"]=$this->user_model->setUserExtInfo(4,array("Phone"=>"12qwe3123"));
    //
	$Doctor_ID=1;
	$Month=201506;
	$Note="呃s";
	$TimeTable=array(0,1,2,3,4,5,6,7,8,9);
    //
	$as=array("Doctor_ID"=>$Doctor_ID,"Month"=>$Month,"Note"=>$Note,"Time_Table"=>$TimeTable);
	//print_r($as);
     $data["value"]=$this->user_model->getOrderArray(2);

    $this->load->view('TestPage/Index', $data);
      
  }
}
?>