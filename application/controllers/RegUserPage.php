<?php
class RegUserPage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   //$this->load->model('notice_model');
   $this->load->helper('url');
  }

  //RegUserPage/Index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegUserPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Index', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_doctor_list()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegUserPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Hsp_doctor_list', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_introduction()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegUserPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Hsp_introduction', $data);
    $this->load->view('templates/footer');
  }
  public function Confirm()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegUserPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Confirm', $data);
    $this->load->view('templates/footer');
  }
    public function My_appointment()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'RegUserPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/My_appointment', $data);
    $this->load->view('templates/footer');
  }

}?>