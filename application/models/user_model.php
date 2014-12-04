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

        //checked
		//获取用户的总数量
		public function get_user_sum()
		{
			return $this->db->count_all('user');
		}

        //checked
		//确认用户是否被封禁,出错（比如没有此用户等）返回-1,没出错则返回true，false
	   public function isValid($userId)
       {
            $validdate=$this->getValidDateTime($userId);
            if($validdate==-1)return -1;
            $currentdate=date("y-m-d h:i:s");
            return strtotime($currentdate)>=strtotime($validdate);
       }

       //checked
       //获得封禁到期时间返回一个日期的字符串比如2010-11-29 21:07:00
       public function getValidDateTime($userId)
       {
            $sql = "SELECT Valid_Date FROM User WHERE ID = ?;"; 
            $query=$this->db->query($sql, array($userId)); 
            if($query->num_rows()!=1)
                return -1;
            return $query->row()->Valid_Date;
       }

       //checked
        //用户封禁,参数要求(用户id，封禁时长/天),出错返回-1
        public function MakeUnvalid($userId,$day)
       {
         // $currentdate=date("y-m-d h:i:s");
          $newValidDate=date('Y-m-d H:i:s',strtotime("+".$day." day")); 
          return $this->setUserValidDateTime($userId,$newValidDate);
       }

       //checked
        //用户解封禁,参数要求(用户id)
        public function MakeValid($userId)
       {
           return $this->setUserValidDateTime($userId,"1000-1-1 0:0:0");
       }
        
       //checked
       //设定封禁日期，(id,日期('2010-11-29 21:07:00'))
       public function setUserValidDateTime($userId,$validDateTime)
       {
         $data = array('Valid_Date' => $validDateTime);
         $where = "ID = $userId"; 
         $sql = $this->db->update_string('user', $data, $where); 
         $query=$this->db->query($sql); 
         return $this->db->affected_rows()!=1;
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

        //测试用函数
        public function getUser($userId)
        {
            $sql = "SELECT * FROM User WHERE ID = ?;"; 
            $query=$this->db->query($sql, array($userId)); 
            if($query->num_rows()!=1)
                return -1;
            return $query->row();
        }

        //checked
		//若用户名密码正确那么返回一个对象，据此对象可以获得用户表的所有数据，反之返回-1
		public function user_login($user,$paswd)
		{
			if($user==null||$paswd==null)return-2;

			$query = $this->db->query("SELECT * FROM user where Name='$user' and Password='$paswd' limit 1;");
			if($query->num_rows()!=0)
				return $query->row();
			else return -1;
		}

        //unchecked
		//参数data数组应该包括除了id之外的所有字段,嗯不包括validtime，返回值是-1
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