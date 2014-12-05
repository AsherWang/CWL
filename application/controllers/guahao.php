<?php
class guahao extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
  }

  //RegOfficePage/index
  public function Index()
  {
    $this->load->helper('url');
    $data['title'] = 'guahao';
  //  $this->load->view('templates/header', $data);
    $this->load->view('guahao/Index', $data);
    $this->load->view('templates/footer');
  }

}?>