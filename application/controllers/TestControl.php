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
//	$this->load->library('session');
//	$this->load->model('hospital_model');
  }

  //SuperManagerPage/index
  public function Index()
  {
		redirect("NoticePage");
		
		 $data["value"]="旧版空间了";
     $this->load->view('TestPage/Index', $data);
  }
}
?>