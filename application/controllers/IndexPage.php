<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:30
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-15 20:52:28
 *
 * 控制器描述：主要控制对首页的访问
 */
 require_once("base_controller.php");
class IndexPage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //s 
   $this->load->model('notice_model');
   $this->load->model('department_model');
   $this->load->model('hospital_model'); 
   $this->load->model('user_model'); 
  }
  //IndexPage/index
  public function Index()
  { 
  		$data["login_result"]=0;
  		if(isset($_POST["id_number"])&&isset($_POST["password"]))
		{
			//登陆
			$logresult=$this->user_model->user_login($_POST["id_number"],$_POST["password"]);
			if($logresult==-1)
			{
				//登陆失败
				$data["login_result"]=-1;
			}
			else
			{	
				//登陆成功
				$data["login_result"]=1;
				$data["user"]=$logresult;
				$this->putSession($logresult);
			}
		}
  
 	 //需要一个 get_notices(int x)的函数，作用是获得最新的x个公告
    //返回一个有x个元素的notices对象的数组
    //两个属性cwldb/notice的  公告编号/ID  和  公告标题/Title

    //$x=5;//暂定为5
   // $data['latest_notices'] = $this->notice_model->get_notice("SELECT * FROM Notice  ORDER BY Date DESC LIMIT 5");
	$data['latest_notices'] = $this->hospital_model->getTableByOrderLimit("Notice",array(),array("Date"=>"desc"),5);
	
	
    $data['title'] = 'Our System';
    //$this->load->view('templates/header', $data);
    //需要一个 get_departments(int x)函数，作用是获得最热的x个科室的信息
    //返回值为一个有x个元素的department对象的数组                                                                                                                        
    //六个属性cwldb/department的  科室名称/Name   科室简介/Info 
    //cwldb/hospital的   医院名称/Name  ,医院电话/Phone  ,医院网址/Website  ,医院等级/Level
    //$x=6;//暂定为6
    //$data['departments']= $this->department_model->get_departments($x);
    //需要一个 get_hospital(int x)函数，作用是获得最热的x个医院的信息
    //返回值为一个有x个元素的hospital对象的数组
    //六个属性 cwldb/hospital的   医院名称/Name  ,医院电话/Phone  ,医院等级/Level
    //医院地址Address,   医院简介/Info,   医院网址/Website  
    //$x=6;//暂定为6
   // $data['hospitals']= $this->hospital_model->getResultFromSqlString("select * from hospital limit 3");    
   $data['hospitals']= $this->hospital_model->getTableByOrderLimit("hospital",array(),array(),3);
    $this->load->view('IndexPage/Index', $data);
	
    //$this->load->view('templates/footer');
  }

  //IndexPage/login
  //public function Login()
  //{
   // $data['news'] = $this->news_model->get_news();
    //$data['title'] = 'login';
   // $this->load->view('templates/header', $data);
    //$this->load->view('IndexPage/Login', $data);
  //  $this->load->view('templates/footer');
  //}

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