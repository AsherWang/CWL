<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-03 15:35:26
 */
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
   //
   //
   //
  }

  //SuperManagerPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'testpage';
   // $this->load->view('templates/header', $data);
    $this->load->view('TestPage/Index', $data);
  //  $this->load->view('templates/footer');
  }
}
?>