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
		var $Max_Order_Sum='';

		//构造函数继承自CI_Model
		function _construct()
		{
			parent::_construct();
			$this->load->database();

		}

		//获取用户的总数量
		public function get_user_sum()
		{
			return $this->db->count_all('user');
		}


		//用户封禁
		//public function 





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


		//若用户名密码正确那么返回一个对象，据此对象可以获得用户表的所有数据，反之返回-1
		public function user_login($user,$paswd)
		{
			if($user==null||$paswd==null)return-2;

			$query = $this->db->query("SELECT * FROM user where Name='$user' and Password='$paswd' limit 1;");
			if($query->num_rows()!=0)
				return $query->row();
			else return -1;
		}


		//参数data数组应该包括除了id之外的所有字段
		function insert_user($data)
		{
			$str = $this->db->insert_string('user', $data);
			$this->db->query($str);
			if($this->db->affected_rows()!=1)
			{
				return -1;
			}
			else
			{
			  	return $this->db->insert_id();
			}  
			
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