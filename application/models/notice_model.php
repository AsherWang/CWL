﻿<?php

	class Notice_model extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
		}

		//公告总数目
		public function get_notice_num()
		{
			return $this->db->count_all("notice");
		}


		public function get_notice($data)
		{
			$query=$this->db->query($data);
			if($query->num_rows()>0)
			{
				return $query->result_array();
			}	
			else
				return NULL;
		}

		public function insert_notice($data)
		{
			return $this->db->insert('notice',$data);
		}

		public function delete_notice($data)
		{
			$this->db->delete($data);
		}

		public function update_notice($ID,$data)
		{
			$this->db->where('ID',$ID);
			$this->db->update('notice',$data);
		}
	}
?>