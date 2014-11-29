<?php
class notices extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    $this->load->model('notices_model');
  }

  //notices/index
  public function index()
  {
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News archive';
    $this->load->view('templates/header', $data);
    $this->load->view('news/index', $data);
    $this->load->view('templates/footer');
  }

  //对应路径notices/view/$1
  public function view($slug)
  {
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item']))
    {
      show_404();
    }

  $data['title'] = $data['news_item']['title'];
  $this->load->view('templates/header', $data);
  $this->load->view('notices/view', $data);
  $this->load->view('templates/footer');
  }

  public function create()
  {
  $this->load->helper('form');
  $this->load->library('form_validation');
  
  $data['title'] = 'Create a notices item';
  
  $this->form_validation->set_rules('title', 'Title', 'required');
  $this->form_validation->set_rules('text', 'text', 'required');
  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('notices/create');
    $this->load->view('notices/success');
    
    $this->load->view('templates/footer');
    
  }
  else
  {
    $this->news_model->set_news();
    $this->load->view('notices/success');
  }
}
}
?>