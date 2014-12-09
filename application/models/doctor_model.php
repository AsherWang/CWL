<?php
	class Doctor_model extends CI_Model{

		var $ID='';
		var $Name='';
		var $Department='';
		var $Hospital='';
		var $Info='';
		var $Expert='';
		var Schedule_ID='';
		
		function _construct()
		{
			parent::_construct();
		}

		function get_doctor($sql)
		{
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				$i=0;
				foreach($query->result() as $row)
				{
					$doctor[$i]=$row;
				}
				return json_encode($doctor);
			}	
			else
				echo "no result!";
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
			$this->db->where('ID'=$ID);
			$this->db->update('doctor',$data);
		}
	}
?>