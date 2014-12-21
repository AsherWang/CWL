<?php
require_once("base_controller.php");
class RegUserPage extends base_controller {

  public $pageData;
  public function __construct()
  {

    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   $this->load->model('user_model');
   $this->load->helper('url');
   $this->load->model('hospital_model');
   $this->load->model('doctor_model');
   $this->load->model('order_model');
   $this->load->library("session");
   
   $this->load->model("department_model");

   $this->pageData['session'] = $this->session;
   $this->pageData['title'] = "注册用户";
  }
	private function checkSession()
	{
        if(!$this->session->userdata('is_logged')){
            redirect("LoginPage");
        }
	}
  //RegUserPage/Index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
  // checkSession();
  // $this->checkSession();
   //搜索条件
   $data["search_level"]="";  //约定对应规则
   $data["search_type"]="";
   $data["search_area"]="";
   $data["search_box"]="";
   
   if(isset($_GET["search_box"])&&$_GET["search_box"]!="") 
   	$data["search_box"]=$_GET["search_box"];
   if(isset($_GET["search_level"])&&$_GET["search_level"]!="") 
   	$data["search_level"]=$_GET["search_level"];
   if(isset($_GET["search_type"])&&$_GET["search_type"]!="") 
   	$data["search_type"]=$_GET["search_type"];
   
    //$data["search_type_list"]=getlist();  //待定
	$data["search_type_list"]=$this->hospital_model->hospital_type();
	
	$search_data=array();
	if(	$data["search_type"]!="")$search_data["Type"]=$data["search_type"];
	if(	$data["search_level"]!="")$search_data["Level"]=$data["search_level"];
	if(	$data["search_area"]!="")$search_data["Area"]=$data["search_area"];
	
	//按条件搜索....
	$data["hospitals"]=$this->hospital_model->get_hospital($search_data,$data["search_box"]);
    $this->pageData['title'] = '查询医院';
	
    $this->load->view('templates/header', $this->pageData); 
    $this->load->view('RegUserPage/Index', $data);
    $this->load->view('templates/footer');
  }
  public function Search_by_dep()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Search_by_dep';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/search_by_dep', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_doctor_list()
  {
	
	//没有传hospital_id就跳回首页
  	if(!(isset($_GET["hospital_id"])&&$_GET["hospital_id"]!=""))
	{
		redirect("");
	}
	$searData=array();
	$data["search_box"]="";  //搜索框的值
	$data["hospital_id"]=$_GET["hospital_id"];  //医院id
   	$data["search_department_type"]="";  //目前搜索的科室类型
	
	//获取科室类型列表
	$temp= $this->department_model->department_type($_GET["hospital_id"]);
    $data['department_type_list'] =$this->CombineArray($temp,"Type");
     
   
   //获取当前科室类型的值
   	if(isset($_GET["search_department_type"]) && $_GET["search_department_type"]!="")
	{
		$data["search_department_type"]=$_GET["search_department_type"];
		$searData["department.Type"]=$data["search_department_type"];
	}
	
	//获取搜索框的值
    if(isset($_GET["search_box"]))$data["search_box"]=$_GET["search_box"];
	$searData["doctor.Hospital_ID"]=$_GET["hospital_id"];

   	//获取医生列表
    $data["doctor_list"]=$this->doctor_model->get_available_doctors($searData,$data["search_box"]);
	
	//获取医院信息
   	$hospital_info=$this->hospital_model->get_hospital(array("ID"=>$_GET["hospital_id"]));
    $this->pageData['title'] =$hospital_info[0]["Name"]; 
	
	
	$data['hospital_info']=$hospital_info[0];
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/Hsp_doctor_list', $data);
    $this->load->view('templates/footer');
  }
  public function Result_of_dep_search()
  {
    //$data['news'] = $this->news_model->get_news();
    $data['title'] = 'Result_of_dep_search';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/result_of_dep_search', $data);
    $this->load->view('templates/footer');
  }
  public function Appointment_quickly()
  {
    // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Appointment_quickly';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/Appointment_quickly', $data);
    $this->load->view('templates/footer');
  }
  public function Hsp_introduction()
  {
   	//没有传hospital_id就跳回首页
  	if(!(isset($_GET["hospital_id"])&&$_GET["hospital_id"]!=""))
	{
		redirect("");
	}
	$data['hospital_id'] = $_GET["hospital_id"];
		//获取医院信息
   	$hospital_info=$this->hospital_model->get_hospital(array("ID"=>$_GET["hospital_id"]));
    $this->pageData['title'] =$hospital_info[0]["Name"]; 
	$data['hospital_info']=$hospital_info[0];
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/Hsp_introduction', $data);
    $this->load->view('templates/footer');
  }
  public function Confirm()
  {
	  if(isset($_POST["user_id"])&&isset($_POST["source_order_id"])&&$_POST["user_id"]!=""&&$_POST["source_order_id"]!="")
	  {
		  
		  $sum=$this->order_model->getAvailableTimes($_POST["user_id"]);
		  if($sum<=0)
		  {
			$data["error_msg"]="您可以预约的次数已经用完";  
		   }
		  else
		  {
		    $new_order_id=$this->order_model->AddNewOrder($_POST["source_order_id"],$_POST["user_id"]);
		     redirect("");//重定向到已有订列表，貌似还没写吧
		  }

	  }
    //没有传doctor_id就跳回首页
  	if(!(isset($_GET["doctor_id"])&&$_GET["doctor_id"]!=""))
	{
		redirect("");
	}
	
	$data["user_info"]=$this->getLogegUser();
	$data["doctor_id"]=$_GET["doctor_id"];
	//获取医生信息
	$data["doctor_info"]=$this->doctor_model->get_doctor_by_id($_GET["doctor_id"]);
	
	//获取医院信息
	$temp=$this->hospital_model->get_hospital(array("ID"=>$data["doctor_info"]["Hospital_ID"]));
	$data["hospital_info"]=$temp[0];
	
	//获取科室信息
	$temp= $this->department_model->get_department(array("ID"=>$data["doctor_info"]["Department_ID"]));
    $data['department_info'] =$temp[0];
     
	
	//获取号源,  号源基本信息,   总数，可用数
	$data["order_source_list"]=$this->order_model->get_order_source_of_doctor($_GET["doctor_id"]);
	//$data["order_source_list"]=$this->order_model->get_order_source_of_doctor($_GET["doctor_id"]);
	
	
    $this->pageData['title'] = '预约医生';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/Confirm', $data);
    $this->load->view('templates/footer');
  }
   public function My_appointment()
  {

	if(!$this->isSessionExists())redirect("");
	
	$data["user_info"]=$this->getLogegUser();
	if($data["user_info"]["user_type"]!=4)$this->jumpSession();
	$data["user_ext_info"]=$this->user_model->getUserExtInfo($data["user_info"]["id"]);
	
	if(isset($_POST["pay"])&&$_POST["pay"]=="pay"&&isset($_POST["order_id"])&&$_POST["order_id"]!="")
	{
		$this->order_model->pay_order($_POST["order_id"]);
	}
	
	
	//订单信息
	$data["order_list"]=$this->order_model->get_order_of_user($data["user_info"]["id"]);
    $this->pageData['title'] = '我的预约单';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/My_appointment', $data);
    $this->load->view('templates/footer');
  }

  public function Personal_message_change()
  {
    $data['news']=0;
    $this->pageData['title'] = '个人信息修改';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/personal_message_change', $data);
    $this->load->view('templates/footer');
  }
  public function Password_change()
  {
   // $data['news'] = $this->news_model->get_news();
   $data['news']=0;
    $this->pageData['title'] = '密码修改';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/password_change', $data);
    $this->load->view('templates/footer');
  }
  public function Head_show()
  {
   // $data['news'] = $this->news_model->get_news();
     $data['news']=0;
    $this->pageData['title'] = '头像设置';
    $this->load->view('templates/header', $this->pageData);
    $this->load->view('RegUserPage/head_show', $data);
    $this->load->view('templates/footer');
  }
}?>