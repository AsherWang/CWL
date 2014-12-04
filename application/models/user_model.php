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
        //public 函数

        //checked
		//获取用户的总数量
		public function get_user_sum()
		{
			return $this->db->count_all('user');
		}

        //这个.....删除
        public function delete_user($userId)
        {
            $this->db->where('ID',$this->getAfiledByName($userId,"Ext_ID"));
            $this->db->delete('user_ext');
            $this->db->where('ID', $userId);
            $this->db->delete('user');
        }

        //更新.
        //$data  是一个数组，array("filedname"=>value,"filedname"=>value...)
        public function update_user($userId,$data)
        {
            $where = "ID = $userId"; 
            $str = $this->db->update_string('user', $data, $where); 
            $this->db->query($str);
            if($this->db->affected_rows()!=1)
                return -1;
            return true;
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
        //若用户名密码正确那么返回一个对象，据此对象可以获得用户表的所有数据，反之返回-1
        public function user_login($user,$paswd)
        {
            if($user==null||$paswd==null)return-1;
            $sql = "SELECT * FROM User WHERE ID = ?;"; 
            $query=$this->db->query($sql, array($userId)); 
            $query = $this->db->query("SELECT * FROM user where Name='$user' and Password='$paswd' limit 1;");
            if($query->num_rows()!=0)
                return $query->row();
            else return -1;
        }

        
                //测试用函数,用来看user更新结果
        public function getUser($userId)
        {
            $sql = "SELECT * FROM User WHERE ID = ?;"; 
            $query=$this->db->query($sql, array($userId)); 
            if($query->num_rows()!=1)
                return -1;
            return $query->row();
        }



       //checked
       //设定封禁日期，(id,日期('2010-11-29 21:07:00'))
       private function setUserValidDateTime($userId,$validDateTime)
       {
         return $this->updateFileds($userId,array("Valid_Date"=>$validDateTime));
       }

       //checked
       //某些字段的更新
       private function updateFileds($Id,$data,$tablename="user")
       {
         $where = "ID = $Id"; 
         $sql = $this->db->update_string($tablename, $data, $where); 
         $query=$this->db->query($sql); 
         return $this->db->affected_rows()!=1;
       }


        //根据id返回某一个字段
        private function getAfiledByName($id,$filedname,$tablename='user')
        {
            $sql = "SELECT * FROM $tablename WHERE ID = ?"; 
            $query=$this->db->query($sql,array($id)); 
            if($query->num_rows()!=1)
                return -1;
            return $query->row()->$filedname;
        }

        //checked
		//参数data数组应该包括除了id之外的所有字段,
        //嗯不包括validtime，user_ext，出错的返回值是-1
		private function insertToTable($data,$tablename="user")
		{
			$str = $this->db->insert($tablename, $data);
			if($this->db->affected_rows()!=1)
			{
				return -1;
			}
			else
			{
			  	return $this->db->insert_id();
			}  
			
		}




        //-------------------
        //下边是关于用户扩展信息的部分
        //没必要分开写了
        //checked
        public function setUserExtInfo($userId,$data)
        {
            $userExtInfoId=$this->getAfiledByName($userId,"Ext_ID");
            if($userExtInfoId!=null&&$this->isUserExtInfoExist($userExtInfoId))
            {
                //已存在那就更新
                $this->updateFileds($userExtInfoId,$data,"user_ext");
            }
            else
            {
                //不存在那就插入
                $userExtInfoId=$this->insertToTable($data,'user_ext');
                $this->updateFileds($userId,array("Ext_ID"=> $userExtInfoId));
            }
        }

       private function isUserExtInfoExist($userExtId)
        {
            return $this->getAfiledByName($userExtId,"ID","user_ext")!="";
        }
	}

?>