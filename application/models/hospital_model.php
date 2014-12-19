<?php
	require_once('base_model.php');
	class Hospital_model extends base_model{

		function __construct()
		{
			parent::__construct();
		}

		//医院总数
		function hospital_num()
		{
			return $this->db->count_all('hospital');
		}
		//返回所有医院类型
		function hospital_type()
		{
			$query=$this->db->query("SELECT DISTINCT (Type) FROM hospital");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
		}
		//获取所有医院地址
		function hospital_address()
		{
			$query=$this->db->query("SELECT DISTINCT (Address) FROM hospital");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
		}
		
	   //获取所有医院所在地区
		function hospital_area()
		{
			$query=$this->db->query("SELECT DISTINCT (Area) FROM hospital");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
		}
		
		
		
		//根据$data数组返回医院所有信息
		function get_hospital($data,$key_words="")
		{
			if(!empty($data))
			foreach ($data as $key => $value) 
			 $this->db->where($key,$value);
			 if($key_words!="")
			$this->db->like('Name', $key_words, 'both');
			$this->db->from("hospital");
			$query = $this->db->get();
			if($query->num_rows()<0)return -1;
			return $query->result_array();
		}

		//表单形式插入医院
		function insert_hospital($data)
		{
			$this->load->helper('url');
			//从表单处获得值

			return $this->db->insert('hospital',$data);
		}

		//该函数的参数均为boolean
		function get_hospital_list($name, $level, $area, $address, $phone, $website, $info, $type)
		{
			$sql = "select ";
			if($name)$sql = $sql."name, ";
			if($level)$sql = $sql."level, ";
			if($area)$sql = $sql."area, ";
			if($address)$sql = $sql."address, ";
			if($phone)$sql = $sql."phone, ";
			if($website)$sql = $sql."website, ";
			if($info)$sql = $sql."info, ";
			if($type)$sql = $sql."type, ";

			$sql = substr($sql, 0, strlen($sql)-2);
			$sql = $sql." ";
			$sql = $sql."from hospital";

			$query = $this->db->query($sql);

			return $query->result();
		}

		function delete_hospital($data)
		{
			$this->db->delete('hospital',$data);
		}

		function update_hospital($ID,$data)
		{
			$this->db->where('ID',$ID);
			$this->db->update('hospital',$data);
		}
	}
?>