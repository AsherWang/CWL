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
   $this->load->model('user_model');
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
	   $data['title'] = '医院管理员-用户管理';
	  if(!$this->isSessionExists())redirect("");  //检测session
	    $loggedUser=$this->getLogegUser();
	   $data["admin_name"]= $loggedUser["username"];
	  
	   //获取此医院的挂号处用户
	   $result=$this->user_model->get_regofficeuser_of_hosiptal( $loggedUser["hospital_id"]);
	    $data["debug_value"]= $result;
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
  
  
  
  
  
  
}