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
    $data['title'] = 'Index';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Index', $data);
    $this->load->view('templates/footer');
  }
  public function Search_by_dep()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Search_by_dep';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/search_by_dep', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_doctor_list()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Hsp_doctor_list';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Hsp_doctor_list', $data);
    $this->load->view('templates/footer');
  }
  public function Result_of_dep_search()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Result_of_dep_search';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/result_of_dep_search', $data);
    $this->load->view('templates/footer');
  }
  public function Appointment_quickly()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Appointment_quickly';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Appointment_quickly', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_introduction()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Hsp_introduction';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Hsp_introduction', $data);
    $this->load->view('templates/footer');
  }
  public function Confirm()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Confirm';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/Confirm', $data);
    $this->load->view('templates/footer');
  }
   public function My_appointment()
  {
	  if($_POST["ds"])
	  {
		  //    $this->load->view('RegUserPage/My_appointment', $data);
    $this->load->view('templates/footer');
		  
	  }

else
{

}
	  
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'My_appointment';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/My_appointment', $data);
    $this->load->view('templates/footer');
  }

  public function Personal_message_change()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Personal_message_change';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/personal_message_change', $data);
    $this->load->view('templates/footer');
  }
  public function Password_change()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Password_change';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/password_change', $data);
    $this->load->view('templates/footer');
  }
  public function Head_show()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Head_show';
    $this->load->view('templates/header', $data);
    $this->load->view('RegUserPage/head_show', $data);
    $this->load->view('templates/footer');
  }
}?>