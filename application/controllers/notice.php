<?php
	class Notice extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('notice_model');
		}

		//显示所有公告
		public function index()
		{
			$this->load->helper('url');
			$data['notice']=$this->notice_model->get_notice("SELECT * FROM Notice");
			//暂时将最新公告放置此处
			$data['latest_notice']=$this->notice_model->get_notice("SELECT * FROM Notice  ORDER BY Date DESC LIMIT 5");
			$this->load->view('IndexPage/index',$data);
		}

		//最新公告,暂时有bug未改正
		/*
		public function latest_notice()
		{
			$this->load->helper('url');
			$data['latest_notice']=$this->notice_model->get_notice("SELECT * FROM Notice  ORDER BY Date DESC LIMIT 5");
			$this->load->view('notice/l',$data);
		}*/

	}


?>