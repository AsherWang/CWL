<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:30
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-03 20:21:26
 *
 * 控制器描述：主要控制对首页的访问
 */
class IndexPage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //s 
   //$this->load->model('notice_model');
   $this->load->helper('url');
  }

  //IndexPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Our System';
   // $this->load->view('templates/header', $data);
    $this->load->view('IndexPage/Index', $data);
  //  $this->load->view('templates/footer');
  }

  //IndexPage/login
  public function Login()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'login';
   // $this->load->view('templates/header', $data);
    $this->load->view('IndexPage/Login', $data);
  //  $this->load->view('templates/footer');
  }

  // //对应路径IndexPage/view/$1
  // public function view($slug)
  // {
  //   $data['news_item'] = $this->news_model->get_news($slug);

  //   if (empty($data['news_item']))
  //   {
  //     show_404();
  //   }

  // $data['title'] = $data['news_item']['title'];
  // $this->load->view('templates/header', $data);
  // $this->load->view('notices/view', $data);
  // $this->load->view('templates/footer');
  // }

  // public function create()
  // {
  // $this->load->helper('form');
  // $this->load->library('form_validation');
  
  // $data['title'] = 'Create a notices item';
  
  // $this->form_validation->set_rules('title', 'Title', 'required');
  // $this->form_validation->set_rules('text', 'text', 'required');
  
  // if ($this->form_validation->run() === FALSE)
  // {
  //   $this->load->view('templates/header', $data);  
  //   $this->load->view('notices/create');
  //   $this->load->view('notices/success');
    
  //   $this->load->view('templates/footer');
    
  // }
  // else
  // {
  //   $this->news_model->set_news();
  //   $this->load->view('notices/success');
  // }
// }
}?>