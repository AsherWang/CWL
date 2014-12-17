<?php
	class NoticePage extends CI_Controller{

		public $sessionInfo;

		public function __construct()
		{
			parent::__construct();
			$this->load->model('notice_model');

			//$sessionInfo[""]
		}

		//显示所有公告
		public function index()
		{
			$this->load->helper('url');
			$data['notice']=$this->notice_model->get_notice("SELECT * FROM Notice INNER JOIN USER ON Notice.Author_ID = User.ID ORDER BY Date DESC");

			$this->load->view("templates/header", $sessionInfo);
			$this->load->view('NoticePage/index',$data);
			$this->load->view("templates/footer");
		}

		//显示单条详细公告
		public function view($ID)
		{
			$this->load->helper('url');

			$data['notice_item']=$this->notice_model->get_notice("SELECT * FROM Notice INNER JOIN USER ON Notice.Author_ID = User.ID WHERE Notice.ID=$ID");
  			if (empty($data['notice_item']))
  			{
    			$data = "None";
  			}
  			$this->load->header(string)
  			$this->load->view('NoticePage/view', $data);
		}

		//发布公告
		public function create()
		{
			//表单辅助函数和表单验证库
			$this->load->helper('form');
			$this->load->library('form_validation');

			//验证规则：不为空
			$this->form_validation->set_rules('title','标题不能为空','required');
			$this->form_validation->set_rules('content','内容不能为空','required');

			if($this->form_validation->run()===FALSE)
			{
				//如果表单不符合，重新载入
				$this->load->view('NoticePage/create');
			}
			else
			{
				$this->notice_model->insert_notice();
				//显示插入成功
				$this->load->view('NoticePage/success');
			}
		}

	}


?>