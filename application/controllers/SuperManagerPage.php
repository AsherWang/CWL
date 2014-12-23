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

    //如果权限不够的话，无法访问该页面
    if($this->session->userdata['user_type'] != "1"){
      Redirect("");
    }
    
  }

  //SuperManagerPage/index
  //默认是管理用户的界面
  public function Index($pageNum=0)
  {

    $this->PageData['userListPageNum'] = $pageNum;
    $cols = array(
          'ID'=>true, 
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

  public function HandleHospital($hosPageNum=0)
  {
    $this->PageData['hospitalListPageNum'] = $hosPageNum;

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
    $this->PageData['userListPageNum'] = 0;
    $txt = $this->input->post('searchTxt');

    $this->data['userList'] = $this->user_model->getUserInfoByName($txt);
    $this->data['userNum'] = $this->user_model->db->affected_rows();

    $this->load->view('templates/header', $this->PageData);
    $this->load->view('SuperManagerPage/Index', $this->data);
    $this->load->view('templates/footer');
  }

  public function SearchHospitalBtnClick()
  {
    $this->PageData['hospitalListPageNum'] = 0;
    $txt = $this->input->post('searchTxt');
    $this->data['hospitalList'] = $this->hospital_model->getHospitalInfoByName($txt);

    $this->data['hospitalNum'] = $this->hospital_model->db->affected_rows();
    $this->load->view('templates/header', $this->PageData);
    $this->load->view('SuperManagerPage/HandleHospital', $this->data);
    $this->load->view('templates/footer');

  }

  public function LogOutBtnClick()
  {
    //$this->destroySession();
    $this->session->sess_destroy();
    echo "注销成功";
  }

  //暂定封禁一周
  public function FengFengFeng()
  {
    $ID = $this->input->post('ID');

    $this->user_model->MakeUnvalid($ID, 7);
    echo "成功封禁该账号!!";
  }
  //解封了
  public function JieJieJie()
  {
    $ID = $this->input->post('ID');
    $this->user_model->MakeValid($ID);
    echo "成功解封该账号!!";
  }

  //用户列表翻页
  public function FlipUserPage()
  {
    $next = $this->input->post('next');
    if($next == "1"){
      $this->PageData['userListPageNum']++;
    }elseif($this->PageData['userListPageNum']>0)
    {
      $this->PageData['userListPageNum']--;
    }
    echo $this->PageData['userListPageNum'];
  }

  //医院列表翻页
  public function FlipHospitalPage()
  {
    $next = $this->input->post('next');
    $pageId =$this->input->post('pageId');

    if($next == "1"){
      $pageId++;
    }elseif($pageId>0)
    {
      $pageId--;
    }
    echo $pageId;
  }
}?>