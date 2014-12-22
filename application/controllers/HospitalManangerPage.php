<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:44
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:40:10
 */
 require_once("base_controller.php");

class HospitalManangerPage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //
   $this->load->model('notice_model');
   $this->load->model('hospital_model');
   $this->load->model('order_model');
   $this->load->model('doctor_model');
   $this->load->model('user_model');
   $this->load->model('department_model');
   $this->load->helper('url');
  }
  public function Appointment()
  {
	  $data['title'] = '订单管理';
	$this->load->view('HospitalManangerPage/Index', $data);
	   $this->load->view('HospitalManangerPage/Appointment');
  }
  public function UserManage()
  {
	   $data["pageIndex"]=2;
	   $data['mark_delete']=0;
	   $data['mark_update']=0;
	   $data['title'] = '医院管理员-用户管理';
	   if(!$this->isSessionExists())redirect("");  //检测session
	   $data['user_info']=$this->getLogegUser();
	   if($data['user_info']["user_type"]!=2)$this->jumpSession();
	  
	   $data["admin_name"]= $data['user_info']["username"];

      if(isset($_GET['do'])&&!empty($_GET['do']))
      {
      	$do=$_GET['do'];
	  	$user_id=$_GET['user_id'];

      	if($do=="delete")
      	{
      		$this->user_model->delete_user($user_id);
      		$data['mark_delete']=mysql_affected_rows();
      	}
      	if($do=="update")
      	{
      		$this->user_model->update_user($user_id);
      		$data['mark_update']=mysql_affected_rows();
      	}
      }

      //获取添加表单内容
      if(isset($_POST['user_ID_number'])&&!empty($_POST['user_ID_number']))
      	if(isset($_POST['user_name'])&&!empty($_POST['user_name']))
      	if(isset($_POST['user_autority'])&&!empty($_POST['user_autority']))
      	if(isset($_POST['hospital_id'])&&!empty($_POST['hospital_id']))
      	{
      		$user=array(
				'ID_number'=>$_POST['user_ID_number'],
				'Password'=>"",
				'Name'=>$_POST['user_name'],
				'Autority'=>$_POST['user_autority'],
				'Hospital_ID'=>$_POST['hospital_id']
				);
      		 $this->user_model->add_user($user);
      	}

      
     


	   //获取此医院的挂号处用户
      	if(isset($_GET['search_name'])&&!empty($_GET['search_name']))
      	{
      		$result=$this->user_model->getUserInfoByName($_GET['search_name']);
      	}
      	else
			$result=$this->user_model->get_regofficeuser_of_hosiptal( $data['user_info']["hospital_id"]);
	    $data["debug_value"]="";
		$data["user_list"]= $result;
		
	   $this->load->view('HospitalManangerPage/Index', $data);
	   $this->load->view('HospitalManangerPage/usermanage',$data);
	   $this->load->view('templates/footer');
  }
  public function notice()
  {
	  $data['title'] = '公告管理';
	  $this->load->view('HospitalManangerPage/Index', $data);
	  $this->load->view('HospitalManangerPage/notice');
	  $this->load->view('templates/footer');
  }

  //首页默认的时候医院信息的修改功能
    public function Index()
   {
	 $data["pageIndex"]=1;
	 if(isset($_GET["do"])&& $_GET["do"]=="exit")//检测退出
	 {
		 $this->destroySession();
	 }
	if(!$this->isSessionExists())redirect("");  //检测session
	
	 $data["value"]="1";
	  $loggedUser=$this->getLogegUser();
	  if(isset($_POST["h_info"])&&$_POST["h_info"]!="")
	  {
		  $updata_data=array();
		  $updata_data["Info"]=trim($_POST["h_info"]);
		  $updata_data["Type"]=$_POST["h_Type"];
		  $updata_data["Name"]=$_POST["h_Name"];
		  $updata_data["Level"]=$_POST["h_Level"];
		  $updata_data["Area"]=$_POST["h_Area"];
		  $updata_data["Address"]=$_POST["h_Address"];
		  $updata_data["Phone"]=$_POST["h_Phone"];
		  $updata_data["Website"]=$_POST["h_Website"];
		  $updata_data["Image_Url"]=$_POST["h_Image_Url"];
		  
		  //以及其他能加的字段...  
		  $this->hospital_model->update_hospital($loggedUser["hospital_id"],$updata_data);
		  $data["value"]=$updata_data;
	  }
	  $data['title'] = '医院信息修改';
	  $tempInfo=$this->hospital_model->get_hospital(array("ID"=> $loggedUser["hospital_id"]));
	  $data["h_info"]=$tempInfo[0];
	  $data["debug_value"]=$tempInfo[0];
	  $data["admin_name"]= $loggedUser["username"];
	  $this->load->view('HospitalManangerPage/Index', $data);
	  $this->load->view('HospitalManangerPage/InfoModify',$data);
	  $this->load->view('templates/footer');
  }
  
  function OrderSource()
  {
	  if(!$this->isSessionExists())redirect("");  //检测session
	  
	  $data['user_info']=$this->getLogegUser();
	  if($data['user_info']["user_type"]!=2)$this->jumpSession();
	  
	  //处理添加号源的表单
	  if(isset($_GET["do"])&&$_GET["do"]=="add")
	  if(isset($_POST["add_hospital_id"])&&$_POST["add_hospital_id"]!="")
	  if(isset($_POST["add_doctor_id"])&&$_POST["add_doctor_id"]!="")
	  if(isset($_POST["add_Date"])&&$_POST["add_Date"]!="")
	  if(isset($_POST["add_Time"])&&$_POST["add_Time"]!="")
	  if(isset($_POST["add_Max_Sum"])&&$_POST["add_Max_Sum"]!="")
	  if(isset($_POST["add_Pay"])&&$_POST["add_Pay"]!="")
	  {
		  //添加新的号源
		  $this->order_model->add_new_order_source(
		  	array(
				"Pay"=>$_POST["add_Pay"],
				"Doctor_ID"=>$_POST["add_doctor_id"],
				"Date"=>$_POST["add_Date"],
				"Time"=>$_POST["add_Time"],
				"Sum_Max"=>$_POST["add_Max_Sum"],
				"Hospital_ID"=>$_POST["add_hospital_id"]
				));
	  }
		  
	    
	   //处理删除号源的表单
	  if(isset($_GET["do"])&&$_GET["do"]=="delete")
	  {
		  if(isset($_GET["order_id"])&&$_GET["order_id"]!="")
		  {
			  $this->order_model->delete_order_source($_GET["order_id"]);
		  }
		  
	  }
	  
	  
	  
	  
	  
	  $data["title"]="添加号源";
	  $data["pageIndex"]=4;
	  $data["admin_name"]="临时管理";
	  $data["order_list"]=$this->order_model->get_order_of_hospital($data['user_info']["hospital_id"]);
	  
	  $data["doctor_id_name"]=$this->doctor_model->get_doctor_id_name_of_hospital($data['user_info']["hospital_id"]);
	  $data["debug_value"]= $data["doctor_id_name"];
	  
	  $this->load->view('HospitalManangerPage/Index', $data);
	  $this->load->view('HospitalManangerPage/OrderSource',$data);
	  $this->load->view('templates/footer');
  }
  
  function DoctorManage()
  {
	  	  if(!$this->isSessionExists())redirect("");  //检测session
	  
	  $data['user_info']=$this->getLogegUser();
	  if($data['user_info']["user_type"]!=2)$this->jumpSession();
	  
	  
	  	   //处理删除医生的表单
	  if(isset($_GET["do"])&&$_GET["do"]=="delete")
	  {
		  if(isset($_GET["doctor_id"])&&$_GET["doctor_id"]!="")
		  {
			  $this->doctor_model->delete_doctor(array("ID"=>$_GET["doctor_id"]));
		  }
		  
	  }
	  
	  
	   //处理添加医生的表单
	  if(isset($_GET["do"])&&$_GET["do"]=="add")
	  if(isset($_POST["add_hospital_id"])&&$_POST["add_hospital_id"]!="")
	  if(isset($_POST["add_doctor_id"])&&$_POST["add_doctor_id"]!="")
	  if(isset($_POST["add_Date"])&&$_POST["add_Date"]!="")
	  if(isset($_POST["add_Time"])&&$_POST["add_Time"]!="")
	  if(isset($_POST["add_Max_Sum"])&&$_POST["add_Max_Sum"]!="")
	  if(isset($_POST["add_Pay"])&&$_POST["add_Pay"]!="")
	  {
		  //添加新的医生
		  $this->order_model->add_new_order_source(
		  	array(
				"Pay"=>$_POST["add_Pay"],
				"Doctor_ID"=>$_POST["add_doctor_id"],
				"Date"=>$_POST["add_Date"],
				"Time"=>$_POST["add_Time"],
				"Sum_Max"=>$_POST["add_Max_Sum"],
				"Hospital_ID"=>$_POST["add_hospital_id"]
				));
	  }
		  
	  
	  
	  
	  
	  $data["doctor_list"]=$this->doctor_model->get_doctor_list_of_hospital($data['user_info']["hospital_id"]);
	  
	  $data["department_id_name"]=$this->department_model->department_id_type_array($data['user_info']["hospital_id"]);
	  
	  
	  $data["title"]="医生信息管理";
	  $data["pageIndex"]=5;
	  $data["admin_name"]="临时管理";
	  $data["debug_value"]= $data["doctor_list"][0];
	  
	  $this->load->view('HospitalManangerPage/Index', $data);
	  $this->load->view('HospitalManangerPage/DoctorManage',$data);
	  $this->load->view('templates/footer');
	  
  }
  
  
  
  
  
}