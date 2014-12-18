<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:44
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:40:10
 */


class HospitalManangerPage extends CI_Controller {
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
    $data['latest_notices'] = $this->notice_model->get_notice("SELECT * FROM Notice  ORDER BY Date DESC LIMIT 4");
    $data['title'] = 'HospitalManangerPage';
    $data['orders_from_patient']= $this->order_model->get_orders_from_patient();
    $data['orders_from_doctor']= $this->order_model->get_orders_from_doctor();
    $data['orders']=$this->order_model->get_orders();
   // $this->load->view('templates/header', $data);
    $this->load->view('HospitalManangerPage/Index', $data);
  //  $this->load->view('templates/footer');

  }


}