<?php
	class Hospital_model extends CI_Model{

		var $ID='';
		var $Name='';
		var $Level='';
		var $Address='';
		var $Phone='';
		var $Info='';
		var $Website='';
		var $Type='';
		
		function _construct()
		{
			parent::_construct();
		}

		function get_hospital($sql)
		{
			$query=$this->db->query($sql);
			if($quey->num_rows()>0)
			{
				$i=0;
				foreach($quey->result() as $row)
				{
					$hospital[$i]=$row;
				}
				return json_encode($hospital);
			}
			else
				echo "no result!";

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