<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-04 19:31:04
 */
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url');
  }

  //SuperManagerPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'testpage';
   // $this->user_model->MakeValid(1);
    $as=array('ID_number' => '546415446327841541');
    $this->user_model->update_user(1,$as);
    $data["value"]=$this->user_model->getUser(1);

    $this->load->view('TestPage/Index', $data);
      
  }
}
?>