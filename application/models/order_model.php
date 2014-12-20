<?php
	require_once("base_model.php");
	class Order_model extends Base_model{

		var $Pay='';
		var $Doctor_ID='';
		var $Duration='';
		var $State='';
		
		function _construct()
		{
			parent::_construct();
			
		}
		
		
		//根据id获得Order的详细信息
		function getOrderInfoById($id)
		{
			return $this->getTable("order",array("ID"=>$id));
		}
		
		//参照表中的数据日期相关的不用填,返回的是新的订单的id
		function AddNewOrder($order_source_id,$user_id)
		{
			$insertData=array(
				"Order_Source_ID"=>$order_source_id,
				"User_ID"=>$user_id
			);
			return $this->insertToTable($insertData,"order");
		}
		
		
		//返回User_ID等于$user_id数组列
		//Array ( [0] => Array ( [ID] => 2 [Pay] => 0.05 [Order_Source_ID] => 2 [User_ID] => 3 [Place_Time] => 2014-12-11 22:24:30 [Pay_Time] => 1000-01-01 00:00:00 [State] => 2 ) )
		function get_user_order_list($user_id)
		{
		   return  $result=$this->getTable("order",array("User_ID"=>$user_id));
		}
		
		
		//返回User_ID等于$user_id数组列
		//Array ( [0] => Array ( [ID] => 2 [Pay] => 0.05 [Order_Source_ID] => 2 [User_ID] => 3 [Place_Time] => 2014-12-11 22:24:30 [Pay_Time] => 1000-01-01 00:00:00 [State] => 2 ) )
		
		function get_doctor_order_source_list($doctor_id)
		{
		   return  $result=$this->getTable("order_source",array("Doctor_ID"=>$doctor_id));
		}
		
		function get_order($data)
		{
			$re=$this->getTable("order",$data);
			if( $re!=-1 && count($re)>0)
				return $re;
			return -1;
		}
		
		//根据id返回号源所有的值
		//
		function get_order_source_by_id($id)
		{
			 $result=$this->getTable("order_source",array("ID"=>$id));
			 if($result==-1)return -1;
			 else return $result[0];
		}
		
		//订单删除
		function order_cancel($order_id)
		{
			return $this->deleteATable($order_id,"order");
		}
		
		function pay_order($userid)
		{
			return $this->updateTable($order_id,
			array("State"=>1,"Pay_Time"=>date("y-m-d h:i:s")),"order");
		}
		
		
	}
	
?>