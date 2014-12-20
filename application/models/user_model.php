<?php
	require_once("base_model.php");
	class User_model extends base_model{
		function _construct()
		{
			parent::_construct();
		}
		//获取用户的总数量
		public function get_user_sum()
		{
			return $this->getTableSum("user");
		}
		
		public function insert_user($data)
		{
			$newId=$this->insertToTable(array_slice($data, 0,3),"user");
			$extInfo=array_slice($data,3);
			if(!empty($extInfo))$this->setUserExtInfo($newId,$extInfo);
			return $newId;
		}
		
		
		//获取扩展表的id，-1表示没有或者出错
		public function getExtId($userId)
		{
			$extId=$this->getAFiledByNameOfATable($userId,"Ext_ID",'user');
			if($extId=="")return -1;
			$temp=$this->getAFiledByNameOfATable($extId,"ID","user_ext");
			if($temp!=$extId)return -1;
			return $extId;
		}
		
        //这个.....删号，checked
        public function delete_user($userId)
        {
            //删除扩展信息(如果有)
            $user_ext_id=$this->getExtId($userId);
            if($user_ext_id!=-1)
            {
                $this->deleteATable($user_ext_id,'user_ext');
            }
            //删除用户基本信息
            //
            $this->deleteATable($userId,'user');
        }

        //更新.checked
        //$data  是一个数组，array("filedname"=>value,"filedname"=>value...)
	public function update_user($userId,$data)
	{
		return $this->updateTable($userId,$data,"user");
	}

       //checked
       //设定封禁日期，(id,日期('2010-11-29 21:07:00'))
       private function setUserValidDateTime($userId,$validDateTime)
       {
         return $this->updateTable($userId,array("Valid_Date"=>$validDateTime),'user');
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
           return $this->getAFiledByNameOfATable($userId,"Valid_Date","user");
       }


		public function get_regofficeuser_of_hosiptal($hospital_ID)
		{
			return $this->getTable("user",array("Hospital_ID"=>$hospital_ID,"Autority"=>3));
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
        public function user_login($ID_number,$paswd)
        {
            if($ID_number==null||$paswd==null)return-1;
			$re= $this->getTable("user",array("ID_number"=>$ID_number,"Password"=>$paswd));
			if($re==-1||count($re)==0)
			{
				return -1;
			}
			return $re[0];
        }
		
		//checked,身份证号是否已注册
		public function IsIDnumberExist($ID_number)
		{
			$re=$this->getTable("user",array("ID_number"=>$ID_number));
			return is_object($re);
		}
         //测试用函数,用来看user更新结果
        public function getUser()
        {
			return $this->getTable("user",array());		
        }
        //-------------------
        //下边是关于用户扩展信息的部分
        //没必要分开写了
        //checked
        public function setUserExtInfo($userId,$data)
        {
            $userExtInfoId=$this->getExtId($userId);
            if($userExtInfoId!=-1)
            {
                //已存在那就更新
                $this->updateTable($userExtInfoId,$data,"user_ext");
            }
            else
            {
                //不存在那就插入
                $userExtInfoId=$this->insertToTable($data,'user_ext');
                $this->updateTable($userId,array("Ext_ID"=> $userExtInfoId),"user");
            }
        }		
		
		//获得该用户的所有订单
		public function getOrderArray($userId)
		{
			return $this->getTable("order",array("User_ID"=>$userId));
		}

    // 获取用户表
    // $cols 是一个数组，['Name'=>true, 'ID'=>false...]
    // $count 表示取多少个 count取0表示全部都要
    // $order 表示order
    public function getUserList($cols, $order, $count)
    {
      $sql = "select ";
      if($cols['ID']) $sql = $sql."ID,";
      if($cols['Ext_ID']) $sql = $sql."Ext_ID,";
      if($cols['ID_number']) $sql = $sql."ID_number,";
      if($cols['Password']) $sql = $sql."Password,";
      if($cols['Name']) $sql = $sql."Name,";
      if($cols['Authority']) $sql = $sql."Autority,"; //这个怎么拼错了。。
      if($cols['Credit_Rate']) $sql = $sql."Credit_Rate,";
      if($cols['Max_Order_Sum']) $sql = $sql."Max_Order_Sum,";
      if($cols['Valid_Date']) $sql = $sql."Valid_Date,";
      if($cols['Hospital_ID']) $sql = $sql."Hospital_ID,";

      $sql = substr($sql, 0, strlen($sql)-1);
      $sql = $sql." ";
      $sql = $sql."from user order by $order";

      if($count != 0){
        $sql = $sql." limit ".(string)$count;
      }

      $query = $this->db->query($sql);
      return $query->result();
    }

    //名字模糊匹配
    public function getUserInfoByName($name)
    {
      $sql = "select Name from user where Name like '%$name%'";
      return $this->db->query($sql)->result();
    }

		public function getUserInfoById($id)
		{
			$re=$this->getTable("user",array("ID"=>$id));
			if($re==-1||count($re)<=0)return -1;
			return $re[0];
		}
	}

?>