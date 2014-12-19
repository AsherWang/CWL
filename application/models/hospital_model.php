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
		function get_hospital($data)
		{
			return $this->getTable('hospital',$data);
		}

		//表单形式插入医院
		function insert_hospital()
		{
			$this->load->helper('url');

			//从表单处获得值
			$data=array(
				'Name'=>$this->input->post('name'),
				'Level'=>$this->input->post('level'),
				'Address'=>$this->input->post('address'),
				'Phone'=>$this->input->post('phone'),
				'Info'=>$this->input->post('info'),
				'Website'=>$this->input->post('website'),
				'Type'=>$this->input->post('type')
				);

			return $this->db->insert('hospital',$data);
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