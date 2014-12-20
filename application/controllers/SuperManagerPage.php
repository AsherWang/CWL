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
  public $PageData;
  public function __construct()
  {
    parent::__construct();
        
    $this->data['userData'] = $this->getLogegUser();
    $this->data['title'] = 'SuperManagerPage';
    $this->load->model('hospital_model');
    $this->load->model('user_model');

    $this->PageData['session'] = $this->session;
    $this->PageData['title'] = "超级管理员界面";
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
  }

  //SuperManagerPage/index
  //默认是管理用户的界面
  public function Index()
  {
    $cols = array(
          'ID'=>false, 
          'Ext_ID'=>false, 
          'Name'=>true, 
          'ID_number'=>false, 
          'Password'=>false,
          'Authority'=>true,
          'Credit_Rate'=>true,
          'Max_Order_Sum'=>true,
          'Valid_Date'=>true,
          'Hospital_ID'=>false
    );

    $this->data['userList'] = $this->user_model->getUserList($cols, "ID", 0);
    $this->data['userNum'] = $this->user_model->get_user_sum();

    $this->load->view('templates/header', $this->PageData);
    $this->load->view('SuperManagerPage/Index', $this->data);
    $this->load->view('templates/footer');
  }

  public function HandleHospital()
  {
    $this->data['hospitalList'] = $this->hospital_model->get_hospital_list(true, true, false, false, false, false, false, false);
    $this->data['hospitalNum'] = $this->hospital_model->hospital_num();

    $this->load->view('templates/header', $this->PageData);
    $this->load->view('SuperManagerPage/HandleHospital', $this->data);
    $this->load->view('templates/footer');
  }

  public function AddNewHospital()
  {
    $this->load->view('templates/header', $this->PageData);
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

  public function SearchUserBtnClick()
  {
    $txt = $this->input->post('searchTxt');

    $this->data['userList'] = $this->user_model->getUserInfoByName($txt);

    $this->data['userNum'] = $this->user_model->db->affected_rows();

    $this->load->view('templates/header', $this->PageData);
    $this->load->view('SuperManagerPage/Index', $this->data);
    $this->load->view('templates/footer');
  }

  public function SearchHospitalBtnClick()
  {
    $txt = $this->input->post('searchTxt');
    $this->data['hospitalList'] = $this->hospital_model->getHospitalInfoByName($txt);

    $this->data['hospitalNum'] = $this->hospital_model->db->affected_rows();
    $this->load->view('templates/header', $this->cairo_pattern_get_extend(pattern));
    $this->load->view('SuperManagerPage/HandleHospital', $this->data);
    $this->load->view('templates/footer');

  }


}?>