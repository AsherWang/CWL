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
$this->load->model('doctor_model');
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
	  
	$hospital_info=$this->hospital_model->get_hospital(array("ID"=>2));
    $data['value'] =$data["doctor_list"]=$this->doctor_model->get_doctors(array());
     $this->load->view('TestPage/Index', $data);
  }
}
?>