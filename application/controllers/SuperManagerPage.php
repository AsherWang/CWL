<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 16:24:47
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:32:39
 */
require_once("base_controller.php");
class SuperManagerPage extends base_controller {

  public $data;
  public function __construct()
  {
    parent::__construct();
        
    $this->data['userData'] = $this->getLogegUser();
    $this->data['title'] = 'SuperManagerPage';
    $this->load->model('hospital_model');
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
  }

  //SuperManagerPage/index
  public function Index()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('SuperManagerPage/Index', $this->data);
    $this->load->view('templates/footer');
  }

  public function HandleHospital()
  {
    $data['hospitalList'] = $this->hospital_model->get_hospital_list(true, true, false, false, false, false, false, false);

    $this->load->view('templates/header', $this->data);
    $this->load->view('SuperManagerPage/HandleHospital', $this->data);
    $this->load->view('templates/footer');
  }

  public function AddNewHospital()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('SuperManagerPage/AddNewHospital', $this->data);
    $this->load->view('templates/footer');
  }

  public function CreateHospital()
  {
    $this->load->library('input');

    $HospitalData=array(
      'Name'=>$this->input->post('hospitalName'),
      'Level'=>$this->input->post('hospitalLevel'),
      'Area'=>$this->input->post('hospitalArea'),
      'Address'=>$this->input->post('hospitalAddress'),
      'Phone'=>$this->input->post('hospitalPhone'),
      'Info'=>$this->input->post('hospitalInfo'),
      'Website'=>$this->input->post('hospitalWebsite'),
      'Type'=>"",
    );

    $this->hospital_model->insert_hospital($HospitalData);
    echo "添加完成";
  }

}?>