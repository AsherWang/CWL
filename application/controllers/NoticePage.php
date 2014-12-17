<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:44
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 10:20:59
 */


class NoticePage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //
   //$this->load->model('notice_model');
   $this->load->helper('url');
  }

  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'NoticePage';
   // $this->load->view('templates/header', $data);
    $this->load->view('NoticePage/Index', $data);
  //  $this->load->view('templates/footer');
  }
  
  public function Detail($noticeid)
  {
	$id=intval($noticeid);  
	 $data['title'] = $id;
	 //应该跳转到其他链接
	 $this->load->view('NoticePage/Index', $data);

	
  }


}