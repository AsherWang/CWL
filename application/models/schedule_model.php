<?php 
require_once("base_model.php");
	class Schedule_model extends Base_model{

		var $ID='';
		var $Doctor_ID='';
		var $Time_Table='';
		var $Note='';
		//实现的是医生的特殊情况，
		function _construct()
		{
			parent::_construct();
		}
		
		
		//以数组形势获得医生的特殊安排
		public function get_schedule_by_doctor_id($doctor_id)
		{
			return $this->getTable("schedule",array("Doctor_ID"=>$doctor_id));	
		}
		
		
		//更新指定id医生的某月时间表
		//参数：$as=array("Doctor_ID"=>2,"Month"=>199912,"Note"=>"啊","Time_Table"=>array(1,2,3,4..));
		//timetable是一个长31的一维数组，第一个表示1日的坐诊信息
		public function update_schedule($data)
		{
			//预处理下
			$data["Time_Table"]=json_encode($data["Time_Table"]);
			
			//做一下检查吧，如果有了就更新
			$cur=$this->get_spec_month_schedule($data["Doctor_ID"],$data["Month"]);
			if($cur!=-1)//如果已存在，那就更新
			{
				$this->updateTable($cur["ID"],$data,"schedule");
			}
			else //不存在则插入
			{
				$this->insertToTable($data,"schedule");
			}
		}
		
		//获取指定id的医生在当月的时间表
		public function get_current_month_schedule($doctor_id)
		{
			$cur_month=$this->get_current_month();
			$this->get_spec_month_schedule($doctor_id,$cur_month);
		}
		
		//获取指定id的医生在指定月份的时间表
		public function get_spec_month_schedule($doctor_id,$month)
		{
			$result=$this->getTable("schedule",array("Month"=>$month,"Doctor_ID"=>$doctor_id));
			if(is_array($result)){
				$data=$result[0];
				$data["Time_Table"]=json_decode($data["Time_Table"]);
				return $data;
				}
			return -1;
		}
		
		//得到当前月
		private function get_current_month()
		{
			return date("Ym");
		}
		
		
		//某日时间表转换
		public function transform_daytime_table()
		{
			//这个，分几个时间段0.0...
			
			
		}

	}
?>