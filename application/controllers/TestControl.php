<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-03 17:05:19
 */
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  //SuperManagerPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'testpage';
    $data["value"]=$this->user_model->user_login("小李","lovelive");
    $this->load->view('TestPage/Index', $data);

  }
}
?>