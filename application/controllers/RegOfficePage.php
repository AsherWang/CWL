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
	  $data["pageIndex"]=1;
	  $search_data=array();
	  if(isset($_GET["order_id"])&&$_GET["order_id"]!="")$search_data["ID"]=$_GET["order_id"];
	  $search_data["hospital_ID"]=$userData["hospital_id"];
     $data['order_list'] = $this->order_model->get_order($search_data);
	 if($data['order_list']==-1)$data['order_list']=array();
	 $data["debug_value"]=$this->getLogegUser();
     $data['title'] = 'RegOfficePage';
 
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
	 if(isset($_GET["id"])&&$_GET["id"]!="")
	 {
		 $search_data["order.ID"]=$_GET["id"];
		 $search_data["hospital_ID"]=$userData["hospital_id"];
		 
		 $data['order_info'] = $this->order_model->get_order($search_data);
		 $data["debug_value"]=$data['order_info'];
		 $this->load->view('RegOfficePage/Index', $data);
	     $this->load->view('RegOfficePage/OrderDetail', $data);
		 
	 }
	 else
	 {
		redirect("RegOfficePage"); 
	 }
   }
  

}?>