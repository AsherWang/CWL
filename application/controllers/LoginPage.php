<?php
class LoginPage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

    //构造函数时载入数据的model类，对应models目录下的news_model
    //s
   //$this->load->model('notice_model');
   $this->load->helper('url');
  }

  //RegOfficePage/index
  public function Index()
  {
;
    $data['title'] = 'LoginPage';
  //  $this->load->view('templates/header', $data);
    $this->load->view('LoginPage/Index', $data);
  }

}?>