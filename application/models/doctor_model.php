<?php
	class Doctor_model extends CI_Model{
	
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

		function insert_doctor()
		{
			$this->load->helper('url');

			$data=array(
				'Name'=>$this->input->post('name'),
				'Hospital'=>$this->input->post('hospital'),
				'Info'=>$this->input->post('info'),
				'Expert'=>$this->input->post('expert')
				//获取科室Department_ID;

				);

			return $this->db->insert('doctor',$data);
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