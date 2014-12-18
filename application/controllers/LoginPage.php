<?php
require_once("base_controller.php");
class LoginPage extends base_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }
  public function Index()
  {
	  $this->checkSession();
	  if(isset($_POST["ID"])&&$_POST["ID"]!=""
	   &&isset($_POST["password"])&&$_POST["password"]!=""
	   &&isset($_POST["choose"])&&$_POST["choose"]!="")
	   {
			//登陆
			$result=$this->user_model->user_login($_POST["ID"],$_POST["password"]);
			if($result==-1)
			{
				//登陆失败
				$data["error"]="用户名密码错误";		
			}
			else
			{
				if($result["Autority"]!=$_POST["choose"])
				{
					$data["error"]="用户类型不匹配";
				}
				else
				{
					$this->putSession($result);
					redirect("LoginPage");
				}
			}
	   }
	  $data['title'] = 'LoginPage';
      $this->load->view('LoginPage/index',$data);
  }
  public function Regist(){
	  /*返回值约定
	 	 $reg_result=1;  //表示之前并未提交过注册信息，显示正常的注册表单
	  	 $reg_result=2;  //表示用户名已经存在，显示提示信息
		 $reg_result=3;   //表示遇到了未知错误，反正是注册失败了
	  	 			//至于注册成功，直接登陆去了，也不用到这里了

	  */
	  //如果有session，那么跳转到他该去的页面，根据用户类型
	  if( ! $this->checkSession())//如果检查后没有session
	  {
		$data['title'] = 'LoginPage';
    	$this->load->view('LoginPage/index',$data);
	  }
	  
	if($this->session->userdata('item')!="")
	{
		redirect("");
	}
	  $data["reg_result"]=$_POST;  
	  if(isset($_POST["id_number"])&&isset($_POST["name"])&&isset($_POST["password"])&&isset($_POST["phonenumber"]))
	  {
		  if($this->user_model->IsIDnumberExist($_POST["id_number"]))
		  { 
		 	 $data["reg_result"]=2;  
		  }
		  else
		  {
			  $info=array("ID_number"=>$_POST["id_number"],
			  				"Password"=>$_POST["name"],
							"Name"=>$_POST["password"],
							"Phone"=>$_POST["phonenumber"]);
			// $newId=$this->user_model->insert_user($info);
			$newId=0;
			 if($newId==-1){
				 $data["reg_result"]=3;
			 }
			 else
			 {
				//注册成功，添加session，跳转到首页去
				//session约定不是我设计的，目前不知道详情
			     //	redirect("");  //跳转到首页
			 }
		  }
	  }
    $this->load->view('LoginPage/regist',$data);
  }

}?>