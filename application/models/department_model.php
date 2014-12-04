<?php
	class Department_model extends CI_Model{

		var $ID='';
		var $Name='';
		var $Info='';
		var $Hospital_ID='';
		
		function _construct()
		{
			parent::_construct();
		}

		//$sql表示传入的查询条件
		function get_department($sql)
		{
			$query=$this->db->query($sql);
			if($query->num_rows()>0)//$query->num_rows()返回当前行数
			{
				$i=0;
				foreach($query->result() as $row)//输出形式具体根据需要
				{
					/*返回JSON格式*/
					$department[$i]=$row;
				}
				return json_encode($department);
			}
			else
				echo "no result!";
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