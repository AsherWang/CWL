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
   $this->output->cache(0); 
  }

  //IndexPage/index
  public function Index()
  { 
  		
		$temp=$this->session->flashdata('pre_link');
		if($temp)
		{
			$this->session->keep_flashdata('pre_link');
		}
  		if(isset($_GET["do"])&&$_GET["do"]=="exit")$this->destroySession();  //退出
  		$data["login_result"]=0; //初始化登陆结果
  		if(isset($_POST["id_number"])&&isset($_POST["password"])&&$_POST["id_number"]!=""&&$_POST["password"]!="")//登陆
		{
			$logresult=$this->user_model->user_login($_POST["id_number"],$_POST["password"]);
			if($logresult==-1)
			{
				$data["login_result"]=-1;//登陆失败
			}
			else
			{	
				if($logresult["Autority"]=="4")
				{
					$this->putSession($logresult);
				}
				else
				{
					$data["login_result"]=-1;//登陆失败
				}
				
			}
		}
		$tempUser=$this->getLogegUser();
		if($tempUser!=-1)
		{
				//登陆成功
				$data["login_result"]=1;
				$data["user"]=$tempUser;
				if($tempUser["user_type"]!=4)$data["login_result"]=0;
				$temp=$this->session->flashdata('pre_link');
				if($temp!="")
				{
					redirect($temp);
				}

				
				
		}
		
		
	$data['title'] = 'Our System'; //页面标题
	$data['latest_notices']=$this->hospital_model->getTableByOrderLimit("Notice",array(),array("Date"=>"desc"),0,5); //拉取公告
   $data['hospitals']= $this->hospital_model->getTableByOrderLimit("hospital",array(),array(),0,6);//拉取热门医院，= =
   $data['departments']= $this->hospital_model->getTableByOrderLimit("department",array(),array(),0,6);  //拉取科室，  = =
   
   foreach($data['departments'] as $key =>$value) //给科室加上医院名字
   {
	   $temp=$this->hospital_model->get_hospital(array("ID"=>$value["Hospital_ID"]));
	   $data['departments'][$key]["Hospital_Name"]=$temp[0]["Name"];
   }
   

   //$temp=$this->hospital_model->hospital_type();
   $data["type_list"]=$this->CombineArray($this->hospital_model->hospital_type(),"Type");
   $data["area_list"]=$this->CombineArray($this->hospital_model->hospital_area(),"Area");//拉取地区列表

   
   //载入页面模块
    $this->load->view('IndexPage/Index', $data);
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