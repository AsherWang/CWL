<?php
	class Hospital extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('hospital_model');
		}

		//显示所有医院
		public function index()
		{
			$data['hospitals']=$this->hospital_model->get_hospital("SELECT * FROM Hospital");
			
			$this->load->view('RegUserPage/Index',$data);
		}

		//所有医院类型
		public function get_hspType()
		{
			$data[hospital_type]=$this->hospital_model->hospital_type();

			$this->load->view('RegUserPage/Index',$data);
		}
		//进入医院预约页面
		public function view($ID)
		{

			$data['hospital_item']=$this->hospital_model->get_hospital("SELECT * FROM Hospital WHERE ID=$ID");
  			if (empty($data['hospital_item']))
  			{
    			show_404();
  			}
  			$this->load->view('RegUserPage/Hsp_doctor_list', $data);
		}

		//发布公告
		/*public function create()
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
				$this->load->view('notice/create');
			}
			else
			{
				$this->notice_model->insert_notice();
				//显示插入成功
				$this->load->view('notice/success');
			}
		}
		*/

	}


?>