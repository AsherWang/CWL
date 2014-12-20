<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:45
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:26:49
 */
require_once("base_controller.php");
class RegOfficePage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model
    //s 
   $this->load->model('order_model');
   $this->load->model('user_model');
   $this->load->model('hospital_model');
   $this->load->model('department_model');
   $this->load->model('doctor_model');
   
   
  }

  //RegOfficePage/index
  public function Index()
  {
	  if(isset($_GET["do"])&&$_GET["do"]=="exit")$this->destroySession();
	  if(!$this->isSessionExists())
	  {
		  redirect("");
	  }
	  $userData=$this->getLogegUser();
	  $data["admin_name"]=$userData["username"];
	  $data["order_id"]="";
	  $data["title"]="订单列表";
	  
	  $data["pageIndex"]=1;
	  $search_data=array();
	  $data["order_id"]="";
	  if(isset($_GET["order_id"])&&$_GET["order_id"]!="")
	  {
		  $search_data["order.ID"]=$_GET["order_id"];
	  	  $data["order_id"]=$_GET["order_id"];
	  }
	  $search_data["hospital_ID"]=$userData["hospital_id"];
     $data['order_list'] = $this->order_model->get_order($search_data);
	 if($data['order_list']==-1)$data['order_list']=array();
	 $data["debug_value"]=$this->getLogegUser();
 	
	
	
 
 
    $this->load->view('RegOfficePage/Index', $data);
	$this->load->view('RegOfficePage/OrderList', $data);

  }
   public function OrderDetail()
   {
	 $data["pageIndex"]=2;
	 if(!$this->isSessionExists())
	  {
		  redirect("");
	  }
	  $userData=$this->getLogegUser();
	 $data["admin_name"]=$userData["username"];
	 $data["title"]="订单详情";
	 if(isset($_GET["id"])&&$_GET["id"]!="")
	 {
		 $search_data["order.ID"]=$_GET["id"];
		 $search_data["hospital_ID"]=$userData["hospital_id"];
		 
		 $tempData = $this->order_model->get_order($search_data);
		 $data['order_info']=$tempData[0];
		
		 
		 //获取下单用户信息
	    $data["order_user_info"]=$this->user_model->getUserInfoById($data['order_info']["User_ID"]);
 	
		//获取对应医院的信息
		$tempData=$this->hospital_model->get_hospital(array("ID"=>$data['order_info']["Hospital_ID"]));
		$data["order_hospital_info"]=$tempData[0];
 	
		
		
		//获取医生的信息
		$tempData=$this->doctor_model->get_doctors(array("ID"=>$data['order_info']["Doctor_ID"]));
		$data["order_doctor_info"]=$tempData[0];
		
		//获取科室的信息
		$tempData=$this->department_model->get_department(array("ID"=>$data["order_doctor_info"]["Department_ID"]));
		$data["order_department_info"]=$tempData[0];
		
		
		 
		//获取对应科室信息
		// $tampData=$this->department_model->get_department(array("ID"=>$data['order_info']["Hospital_ID"]));
		 $data["debug_value"]= $data["order_department_info"];
		 $this->load->view('RegOfficePage/Index', $data);
	     $this->load->view('RegOfficePage/OrderDetail', $data);
		 
	 }
	 else
	 {
		redirect("RegOfficePage"); 
	 }
   }
  
  function PrintOrder()
  {
	   $data["pageIndex"]=3;
	   if(!$this->isSessionExists())
	   {
		  redirect("");
	   }
	  $userData=$this->getLogegUser();
	  if(isset($_POST["print_id"])&&$_POST["print_id"]!="")
	  {
	  		$data["admin_name"]=$userData["username"];
	  		$data["title"]="挂号单";
	  		$data["debug_value"]="挂号单";
	  		
			 $search_data["order.ID"]=$_POST["print_id"];
			 $search_data["hospital_ID"]=$userData["hospital_id"];
			 
			 $tempData = $this->order_model->get_order($search_data);
			 $data['order_info']=$tempData[0];
			
			 
			 //获取下单用户信息
			$data["order_user_info"]=$this->user_model->getUserInfoById($data['order_info']["User_ID"]);
		
			//获取对应医院的信息
			$tempData=$this->hospital_model->get_hospital(array("ID"=>$data['order_info']["Hospital_ID"]));
			$data["order_hospital_info"]=$tempData[0];
		
			
			
			//获取医生的信息
			$tempData=$this->doctor_model->get_doctors(array("ID"=>$data['order_info']["Doctor_ID"]));
			$data["order_doctor_info"]=$tempData[0];
			
			//获取科室的信息
			$tempData=$this->department_model->get_department(array("ID"=>$data["order_doctor_info"]["Department_ID"]));
			$data["order_department_info"]=$tempData[0];
			
			
			
			
			
			
	  		$this->load->view('RegOfficePage/Index', $data);
	  		$this->load->view('RegOfficePage/PrintOrder', $data);
	  }
	  else
	  {
		  redirect("RegOfficePage");
	  }
  }
  
  public function  PayOrder()
  {
	  
  }

}?>