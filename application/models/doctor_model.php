<?php
	class Doctor_model extends CI_Model
	{
	
		function __construct()
		{
			parent::__construct();
		}

		function get_doctor($hospital_id,$department_id)
		{
			$query=$this->db->query("SELECT * FROM doctor WHERE Hospital_ID=$hospital_id AND $Department_ID=$department_id");
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}	
			else
				return NULL;
		}
		
		function get_doctor_by_id($doctor_id)
		{
			  $this->db->where("ID",$doctor_id);
			  $this->db->from("doctor");
			  $query = $this->db->get();
			  if($query->num_rows()<=0)return -1;
			  $re=$query->result_array();
			  return $re[0];
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

		function delete_doctor($data)
		{
			$this->db->delete('doctor',$data);
		}

		function update_doctor($ID,$data)
		{
			$this->db->where('ID',$ID);
			$this->db->update('doctor',$data);
		}
		function get_available_doctors($data,$key_words="")
		{
			    //将data数组遍历，取出名字和值,加进where中
			$this->db->select("doctor.Name as dName,department.Name as tName,doctor.ID as dID,department.ID as tID,Expert");
			if(!empty($data))
			foreach ($data as $key => $value) 
			{
				$this->db->where($key,$value);
			}
			$this->db->join('department', 'department.ID = doctor.Department_ID'); 
			if($key_words!="")
				$this->db->like('doctor.Name', $key_words, 'both');
			$this->db->from("doctor");
		  $query = $this->db->get();
		  if($query->num_rows()<0)return -1;
		  return $query->result_array();
		}
		
		
				function get_doctors($data,$key_words="")
		{
			    //将data数组遍历，取出名字和值,加进where中
			if(!empty($data))
			foreach ($data as $key => $value) 
			{ 
				$this->db->where($key,$value);
			}
			if($key_words!="")
				$this->db->like('Name', $key_words, 'both');
			$this->db->from("doctor");
			
			
			
			
		  $query = $this->db->get();
		  if($query->num_rows()<0)return -1;
		  return $query->result_array();
		}
		
		
		
		
	}
?>