<?php
class base_controller extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
	$this->load->library('session');
  }
/*
	用户权限约定
	普通用户4
	医院挂号处3
	医院管理员2
	超级管理员1
	session 约定
	{
		用户名   username	
		用户权限 	authority	
		是否被封	is_valid
		解封日期	valid_datetime
		信用等级	credit_rate
		用户ID   id
		身份证号	id_number
		是否登陆	is_logged
		医院的id  hospital_id
	}
*/
	
	//如果已经登录那么就自动跳转到响应界面，如果没有session记录就返回false，根据需要调整重定向的位置
	protected function jumpSession()
	{
        if($this->session->userdata('is_logged'))
		{
			$type=$this->session->userdata('user_type');
            if($type==3)//医院挂号处
			{
				redirect("RegOfficePage");
			}else if($type==2)//医院管理员
			{
			    redirect("HospitalManangerPage");
			}
			else if($type==1)//超级管理员
			{
				redirect("SuperManagerPage");
			}
			else if($type==4)//挂号用户
			{
				redirect("");
			}
			else  //不知道是什么
			{
				$this->destroySession();
			}
        }
		redirect("");
	}
	
	protected function destroySession()
	{
		$this->session->sess_destroy();
			redirect("");
	}
	
	protected function putSession($logresult){
		$currentdate=date("y-m-d h:i:s");
		$validdate=$logresult["Valid_Date"];
		$sessionDate=array(
					'id'=>$logresult["ID"],
					'id_number'=>$logresult["ID_number"],
					'username'=>$logresult["Name"],
					'user_type'=>$logresult["Autority"],
					'valid_datetime'=>$validdate,
					'user_Credit_Rate'=>$logresult["Credit_Rate"],
					'is_logged'=>true,
					'is_valid'=> strtotime($currentdate)>=strtotime($validdate),
					'hospital_id'=>$logresult["Hospital_ID"]
				);
		$this->session->set_userdata($sessionDate);		
	}
	protected function getLogegUser()
	{
		  if($this->session->userdata('is_logged'))
		  {
			  return $this->session->all_userdata();
		  }
		  return -1;
	}
	
	 
  	protected function CombineArray($array,$name)
	{
		$result=array();
		$i=0;
		if(!is_array($array))return $result;
		foreach($array as $key=>$value)
		{
			$result[$i]=$value[$name];
			$i++;
		}
		return $result;
	}
	
	protected function isSessionExists()
	{
		return 	$this->session->userdata('is_logged');
	}
	
	
	
}
?>