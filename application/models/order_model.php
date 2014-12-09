<?php
	require_once("base_model.php");
	class Order_model extends MyBase_model{

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
		
		//参照表中的数据日期相关的不用填
		function AddNewOrder()
		{
			
				
		}
		
		
		function getUserOrderList()
		{
				
		}
		
		
	}
	
?>