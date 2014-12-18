<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:44
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:40:10
 */
 require_once("base_controller.php");

class HospitalManangerPage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //
   $this->load->model('notice_model');
   $this->load->model('order_model');
   $this->load->helper('url');
  }

  public function Index()
  {
    $data['title'] = '医院管理员-用户管理';
   // $data['orders_from_patient']= $this->order_model->get_orders_from_patient();
  //  $data['orders_from_doctor']= $this->order_model->get_orders_from_doctor();
  //  $data['orders']=$this->order_model->get_orders();
   // $this->load->view('templates/header', $data);




    $this->load->view('HospitalManangerPage/Index', $data);
   $this->load->view('HospitalManangerPage/usermanage', $data);

  //  $this->load->view('templates/footer');
//aaaa
  }
  public function Appointment()
  {
	  $data['title'] = '医院管理员-订单管理';
	$this->load->view('HospitalManangerPage/Index', $data);
	   $this->load->view('HospitalManangerPage/Appointment');
  }
  public function nummanage()
  {
	  $data['title'] = '医院管理员-号源管理';
	$this->load->view('HospitalManangerPage/Index', $data);
	   $this->load->view('HospitalManangerPage/nummanage');
  }
  public function notice()
  {
	  $data['title'] = '医院管理员-公告管理';
	$this->load->view('HospitalManangerPage/Index', $data);
	   $this->load->view('HospitalManangerPage/notice');
  }
  public function doctorinfo()
  {
	  $data['title'] = '医院管理员-医生管理';
	  $this->load->view('HospitalManangerPage/Index', $data);
	  $this->load->view('HospitalManangerPage/doctorinfo');
  }
}