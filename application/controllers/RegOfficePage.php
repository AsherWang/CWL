<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:45
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:26:49
 */

class RegOfficePage extends CI_Controller {
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
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegOfficePage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegOfficePage/Index', $data);
  //  $this->load->view('templates/footer');
  }

}?>