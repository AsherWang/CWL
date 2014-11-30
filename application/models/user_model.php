<?php
	class User_model extends CI_Model{
		
		//变量（表字段，对象属性）
		var $ID='';
		var $Ext_ID='';
		var $ID_number='';
		var $Password='';
		var $Name='';
		var $Authority='';
		var $Credit_Rate='';
		var Max_Order_Sum='';

		//构造函数继承自CI_Model
		function _construct()
		{
			parent::_construct();
		}

		//查找、插入、删除、更新user表函数，$data为查询条件（数组形式）
		function get_user($data='')
		{
			$query=$this->db->query($data);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $row)//根据实际情况改写以下内容
				{
					echo $row->ID;//可显示当前查询表获得的结果
					echo $row->Ext_ID;
					echo $row->ID_number;
					echo $row->Password;
					echo $row->Name;
					echo $row->Authority;
					echo $row->Credit_Rate;

					$this->Max_Order_Sum = $row->Max_Order_Sum;//也可将查询结果赋给当前对象
				}
			}
			else
				echo "no result!";
		}

		function insert_user($data)//传入数组或者对象均可$data||$object
		{
			$this->db->insert_batch('User',$data);
		}

		function delete_user($data)
		{
			$this->db->delete('User',$data);
		}

		function update_user($data)
		{
			$this->db->delete_batch('User',$data);
		}
	}

?>