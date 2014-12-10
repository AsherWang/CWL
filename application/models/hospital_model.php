<?php
	class Hospital_model extends CI_Model{

		
		
		function _construct()
		{
			parent::_construct();
		}

		function get_hospital($sql)
		{
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}
			else
				return NULL;

		}

		function insert_hospital($data)
		{
			$query=$this->db->where($data);
			if($query->result()==NULL)
			{
				$this->db->insert('hospital',$data);
			}
			else
				echo "This hospital  already exists";
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