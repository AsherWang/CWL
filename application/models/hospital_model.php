<?php
	class Hospital_model extends CI_Model{

		function __construct()
		{
			parent::__construct();
		}

		//医院总数
		function hospital_num()
		{
			return $this->db->count_all('hospital');
		}

		function get_hospital($data)
		{
			$query=$this->db->query($data);
			if($query->num_rows()>0)
			{
				return $query->result_array();//返回的是一个数组用foreach遍历即可
			}
			else
				return NULL;

		}

		function insert_hospital()
		{
			$this->load->helper('url');

			$data=array(
				'Name'=>$this->input->post('name'),
				'Level'=>$this->input->post('level'),
				'Address'=>$this->input->post('address'),
				'Phone'=>$this->input->post('phone'),
				'Info'=>$this->input->post('info'),
				'Website'=>$this->input->post('website'),
				'Type'=>$this->input->post('type')
				);

			return $this->db->insert('hospital',$data);
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