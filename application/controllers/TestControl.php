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
//    $this->load->model('user_model');
    $this->load->helper('url');
//	$this->load->model('schedule_model');
//	$this->load->model('order_model');
	$this->load->library('session');
	$this->load->model('hospital_model');
  }
  	protected function CombineArray($array,$name)
	{
		$result=array();
		$i=0;
		foreach($array as $key=>$value)
		{
			$result[$i]=$value[$name];
			$i++;
		}
		return $result;
	}

  //SuperManagerPage/index
  public function Index()
  {
	  
	$temp=$this->hospital_model->hospital_type();
	
	  $data['departments']= $this->hospital_model->getTableByOrderLimit("department",array(),array(),0,1);  //拉取科室，  = =
   
   foreach($data['departments'] as $key =>$value)
   {
	   $temp=$this->hospital_model->get_hospital(array("ID"=>$value["Hospital_ID"]));
	   $data['departments'][$key]["Hospital_Name"]=$temp[0]["Name"];
   }
   $data["value"]= $data['departments'];
     $this->load->view('TestPage/Index', $data);
  }
}
?>