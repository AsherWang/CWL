<?php
	class Notice_model extends CI_Model{

		var $ID='';
		var $Title='';
		var $Content='';
		var $Date='';
		var $Author_ID='';
		
		function _construct()
		{
			parent::_construct();
		}

		function get_notice($sql)
		{
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				$i=0;
				foreach($query->result() as $row)
				{
					$notice[$i]=$row;
				}
				return json_encode($notice);
			}	
			else
				echo "no result!";
		}

		function insert_notice($data)
		{
			$query=$this->db->where($data);
			if($query->result()==NULL)
			{
				$this->db->insert('notice',$data);
			}
			else
				echo "This notice  already exists";
			$this->db->insert('notice',$data);
		}

		function delete_notice($data)
		{
			$this->db->delete($data);
		}

		function update_notice($ID,$data)
		{
			$this->db->where('ID',$ID);
			$this->db->update('notice',$data);
		}
	}
?>