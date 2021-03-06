<?php
require_once("base_controller.php");
class NoticePage extends base_controller{

	public $PageData;
	public $session;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('notice_model');
		$this->load->helper('url');
		$this->PageData["title"] = "公告页面";
		$this->PageData['session'] = $this->session;
	}

	//显示所有公告
	public function index()
	{
		$this->output->cache(0); //设置页面缓存
		
		if($this->isSessionExists())
		{
			$data["user_info"]=$this->getLogegUser();
		}
		
		
		$data['notice']=$this->notice_model->get_notice("SELECT Notice.ID, Notice.Title, Notice.Date, Author_ID, User.Name FROM Notice INNER JOIN USER ON Notice.Author_ID = User.ID ORDER BY Date DESC");

if(isset($_POST["Title"])&&$_POST["Title"]!="")
if(isset($_POST["Content"])&&$_POST["Content"]!="")
{
	$this->notice_model->insert_notice(array("Author_ID"=>$data["user_info"]["id"],"Title"=>$_POST["Title"],"Content"=>$_POST["Content"]));
}
		$this->load->view("templates/noticeheader", $this->PageData);
		$this->load->view('NoticePage/index',$data);
		$this->load->view("templates/footer");
	}

	//显示单条详细公告
	public function view($ID)
	{
		
		$this->output->cache(5); //设置页面缓
		$this->load->helper('url');

		$data['notice_item']=$this->notice_model->get_notice("SELECT Notice.*, User.Name FROM Notice INNER JOIN USER ON Notice.Author_ID = User.ID WHERE Notice.ID=$ID");
			if (empty($data['notice_item']))
			{
			$data = "None";
			}
			//$this->load->header(string);
			$this->load->view("templates/noticeheader", $this->PageData);
			$this->load->view('NoticePage/view', $data);
			$this->load->view("templates/footer");
	}

	//发布公告
	public function create()
	{
		if(!$this->isSessionExists())redirect("");		
		$data["user_info"]=$this->getLogegUser();
		
		if($data["user_info"]["user_type"]>2)
		{
			$this->jumpSession();
		}
		
		
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
			//$this->notice_model->insert_notice(array("Author_ID"=>$data["user_info"]["id"],"Title"=>));
			//显示插入成功
			$this->load->view('NoticePage/success');
		}
	}

	public function success()
	{
		$this->load->view('NoticePage/success');
	}

}


?>