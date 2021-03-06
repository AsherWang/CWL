<?php
	require_once('base_model.php');
	class Department_model extends base_model{

		function __construct()
		{
			parent::__construct();
		}

		//科室数目
		function department_num()
		{
			return $this->db->count_all('department');
		}
		//根据医院ID返回本医院所有科室类型
		function department_type($Hospital_ID)
		{
			
			$query=$this->db->query("SELECT DISTINCT (Type) FROM department WHERE Hospital_ID=$Hospital_ID");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
			
		}
		
		//根据医院ID返回本医院所有ID和科室名称的键值对
		function department_id_type_array($Hospital_ID)
		{
			$result=array();
			
			$query=$this->db->query("SELECT ID,Type FROM department WHERE Hospital_ID=$Hospital_ID");
			if($query->num_rows()>0)
			{
				foreach($query->result_array() as $value)
				{
					$result[$value["ID"]]=$value["Type"];
				}
				return $result;
			}
			else
				return array();
			
		}
		
		
		//$data数组查找所有科室信息
		function get_department($data)
		{
			return $this->getTable('department',$data);
		}

		//根据科室返回包含此科室的所有医院信息
		function get_department_hs($Hospital_ID)
		{
			$query=$this->db->query("SELECT * FROM Hospital WHERE ID=$Hospital_ID");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;
		}

		function insert_department()//$data是以数组形式传入
		{
			$this->load->helper('url');

			$data=array(
				'Type'=>$this->input->post('type'),
				'Name'=>$this->input->post('name'),
				'Info'=>$this->input->post('info')
				//获取发布Hospital_ID
				
				);

			return $this->db->insert('department',$data);
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