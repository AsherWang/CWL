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
	  $data["search_id"]="";
	  $data["pageIndex"]=1;
	  $data["admin_name"]="挂号处的人儿啊";
	  $search_data=array();
	  if(isset($_GET["search_id"])&&$_GET["search_id"]!="")$search_data["ID"]=$_GET["search_id"];
	  
     $data['order_list'] = $this->order_model->get_order($search_data);
	 $data["debug_value"]=$data['order_list'];
     $data['title'] = 'RegOfficePage';
 
    $this->load->view('RegOfficePage/Index', $data);
	$this->load->view('RegOfficePage/OrderList', $data);

  }

}?>