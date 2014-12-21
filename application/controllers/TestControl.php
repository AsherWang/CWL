<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-09 23:05:05
 */
 require_once("base_controller.php");
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
//    $this->load->model('user_model');
    $this->load->helper('url');
$this->load->model('department_model');
$this->load->model('doctor_model');
	$this->load->library('session');
	$this->load->model('hospital_model');
	$this->load->model('order_model');
	
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
	  
	
	$data["value"]= $this->order_model->get_order_source_of_doctor(2);
  
   
     $this->load->view('TestPage/Index', $data);
  }
}
?>