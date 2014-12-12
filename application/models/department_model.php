<?php
	class Department_model extends CI_Model{

		function __construct()
		{
			parent::__construct();
		}

		//科室数目
		function department_num()
		{
			return $this->db->count_all('department');
		}
		
		//查找所有科室
		function get_department($data)
		{
			$query=$this->db->query($data);
			if($query->num_rows()>0)//$query->num_rows()返回当前行数
			{
				return $query->result_array();
			}
			else
				return NULL;
		}

		//根据科室返回包含此科室的所有医院信息
		function get_department_hs($Name)
		{
			//使用模糊查询
			$Hospital_ID=$this->db->query("SELECT Hospital_ID FROM Department WHERE Name LIKE $Name");
			$query=$this->db->query("SELECT * FROM Hospital WHERE ID=$Hospital_ID");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
		}

		function insert_department($data)//$data是以数组形式传入
		{
			/*
				数组形式如下
				$data=array(
					'ID'=>$ID,
					'Name'=>$Name,
					'Info'=>$Info,
					'Hospital_ID'=>$Hospital_ID
				);

			*/
			//插入前需要判断是否已经存在
			$query=$this->db->where($data);
			if($query->result()==NULL)
			{
				$this->db->insert('departmendt',$data);
			}
			else
				echo "This department  already exists";
		}

		function delete_department($data)
		{
			/*
				$data=array(
					'ID'=>$ID
				);
			*/
			//删除是以ID删除的
			//$this->get_department($data);
			$this->db->delete('department',$data);
		}

		function update_department($data)
		{
			/*
				$data=array(
					'Name'=>$Name;
					'Info'=>$Info;
					'Hospital_ID'=>$Hospital_ID;
				);
			*/
			$this->db->where('ID',$ID);
			$this->db->update('department',$data);
		}
	}

?>