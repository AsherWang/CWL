<?php
	class Doctor_model extends CI_Model{

		/*
		var $ID='';
		var $Name='';
		var $Department='';
		var $Hospital='';
		var $Info='';
		var $Expert='';
		var Schedule_ID='';
		*/
		
		function __construct()
		{
			parent::__construct();
		}

		function get_doctor($hospital,$department)
		{
			$query=$this->db->query("SELECT * FROM Doctor WHERE Hospital=$hospital AND $Department=$department");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}	
			else
				return NULL;
		}

		function insert_doctor($data)
		{
			$query=$this->db->where($data);
			if($query->result()==NULL)
			{
				$this->db->insert('doctor',$data);
			}
			else
				echo "This doctor  already exists";
		}

		function delete_doctor($data);
		{
			$this->db->delete('doctor',$data);
		}

		function update_doctor($ID,$data)
		{
			$this->db->where('ID',$ID);
			$this->db->update('doctor',$data);
		}
	}
?>