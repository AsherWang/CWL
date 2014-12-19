<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 16:24:47
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:32:39
 */
require_once("base_controller.php");
class SuperManagerPage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
  }

  //SuperManagerPage/index
  public function Index()
  {
    $userData = $this->getLogegUser();
    $data['userData'] = $userData;

    $data['title'] = 'SuperManagerPage';
    $this->load->view('templates/header', $data);
    $this->load->view('SuperManagerPage/Index', $data);
    $this->load->view('templates/footer');
  }

}?>