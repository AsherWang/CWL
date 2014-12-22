<?php
/**
 * @Author: 2205
 * @Date:   2014-12-11
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-11
 */
//这里将是确认预约的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/confirm.css'?>" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
    <!-- <?php var_dump($order_source_list);?>-->
    	<div class="container">
    		<div class="title">确认预约订单信息</div>
    		<hr class="dividing_line"/>

    		<!--确认医生信息-->
    		<table class="table doc_mes_tab">
    			<colgroup>
    				<col width="35%"></col>
    				<col width="25%"></col>
    				<col width="25%"></col>
    				<col ></col>
    			</colgroup>
    			<thead>
    				<th class="doc_mes_thead">医生信息</th>
    				<th>所属医院</th>
    				<th>门诊类型</th>
    			</thead>
    			<tr class="doc_mes_text">
    				<td>
    					<div class="row">
    					<img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-4 img-circle doctor_img" />
    						<div class="doc_intro">
    						<span class="doc_name"><?php echo $doctor_info["Name"];?></span>
    						<div class="doc_intro_text"><?php echo $department_info["Name"];?></div>
                            <div class="doc_intro_text"><?php echo $doctor_info["Expert"];?></div>
    						<div class="doc_intro_text"><?php echo $doctor_info["Info"];?></div>
    						</div>
    					</div>
    				</td>
    				<td><?php echo '<a href="'.base_url().'RegUserPage/Hsp_doctor_list?hospital_id='.$hospital_info["ID"].'">'.$hospital_info["Name"].'</a>';?></td>
                    <td><?php echo '<a href="'.base_url().'RegUserPage/Hsp_doctor_list?hospital_id='.$hospital_info["ID"].'&search_department_type='.$department_info["Name"].'">'.$department_info["Name"].'</a>';?></td>
    			</tr>
    		</table>
    		<!--确认医生信息-->
             <?php
			function money_trans($value)
			{
				 $str = sprintf("&yen;%.2f",$value);
				 return $str;
			}
			
			function time_block_trans($TimeValue)
			{
				$result=array(
					"08:00-08:59",
					"09:00-09:59",
					"10:00-10:59",
					"14:00-14:59",
					"15:00-15:59",
					"16:00-16:59"
				);
				return $result[$TimeValue];
			}
			
			
			if(isset($error_msg)&&$error_msg!="")
			{
				echo "<div class='table-bordered' >";
				echo $error_msg;
				echo "</div>";	
			}
			?>
            
            
            
			<!--号源列表-->
            <?php if(empty($order_source_list)) echo("一边去，这没了")?>
            <!-- 我想要这里只输出一种——有或没有 -->
            <table class="table order_source_table">
                <colgroup>
                    <col width="20%"></col>
                    <col width="20%"></col>
                    <col width="15%"></col>
                    <col width="15%"></col>
                    <col width="15%"></col>
                    <col></col>
                </colgroup>
                <thead>
                    <th style="text-align:center">日期</th>
                    <th style="text-align:center">时段</th>
                    <th style="text-align:center">挂号费</th>
                    <th style="text-align:center">已预约数</th>
                    <th style="text-align:center">总量</th>
                    <th style="text-align:center"></th>
                </thead>
                <?php foreach ($order_source_list as $order_source):?>
                    <tr>
                        <td><?php echo $order_source["Date"]?></td>
                        <td><?php echo time_block_trans($order_source["Time"])?></td>
                        <td><?php echo money_trans($order_source["Pay"])?></td>
                        <td><?php echo $order_source["Cur_Order_Source"]?></td>
                        <td><?php echo $order_source["Sum_Max"]?></td>
                        <!-- <td><?php if($order_source["Sum_Max"]<=$order_source["Cur_Order_Source"]) echo("不"); echo("可预约")?></td> -->
                        <td><?php if($order_source["Sum_Max"]<=$order_source["Cur_Order_Source"]) 
                                    echo("已无法预约");
                                  else{
                                    echo "<form method='post'>";
                                    echo "<input name='user_id' type='hidden' value='".$user_info["id"]."' />";
                                    echo "<input name='source_order_id' type='hidden' value='".$order_source["sID"]."' />";
                                    echo "<input type='submit' value='我要预约' />";
                                    echo "</form>";
                                  }?></td>
                    </tr>
                <?php endforeach ?>
            </table>
            <!--号源列表-->
            



    		<!--选择就诊日期
    		<div class="choose_date">选择就诊日期</div>
    			<div class="row choose_date_text">
    			<select class="choose_year">
    				<option>2014</option>
    				<option>2015</option>
    			</select>
    			年
    			<select class="choose_month">
    				<option>11</option>
    				<option>12</option>
    			</select>月
    			<select class="choose_month">
    				<option>21</option>
    				<option>22</option>
    				<option>23</option>
    				<option>24</option>
    				<option>25</option>
    				<option>26</option>
    				<option>27</option>
    				<option>28</option>
    				<option>29</option>
    				<option>30</option>
    			</select>
    			<span>注意这里的时间选项，考虑可进入下一年（月）预约的问题</span>
    			</div>
            选择就诊日期-->
            <!--选择就诊时间
                <div class="choose_date">选择就诊时间</div>
                <div class="choose_time_radio">
                    <div class="row">
    			        <input type="radio" name="choosetime" checked="checked">08:00-08:59
    			        <input type="radio" name="choosetime" />09:00-09:59
                        <input type="radio" name="choosetime" />10:00-10:59
                    </div>
                    <div class="row" style="margin-top:10px">
                        <input type="radio" name="choosetime" />14:00-14:59
                        <input type="radio" name="choosetime" />15:00-15:59
                        <input type="radio" name="choosetime" />16:00-16:59
                    </div>
                </div>
            选择就诊时间-->
            <!--选择就诊人
                <div class="choose_date">选择就诊人</div>
                <div class="patient_message">
                    <div class="patient_name">XXX(本人)</div>
                    <div class="row patient_id_sty">
                        <span>证件号：</span>
                        <span>********************（我管你有多长）</span>
                    </div>
                    <div class="row">
                        <span>联系方式：</span>
                        <span>********************  </span>
                    </div>
                    <a class="choose_another_patient" href="######">选择其他就诊人</a>
                </div>
            选择就诊人-->

    		<!--验证码输入
                <div class="choose_date">请输入图片验证码</div>
                <div class="row ver_code">
                    <input class="ver_text" type="text"/>
                    <img src="<?php echo base_url()?>res/images/authcode.php" style="color:#888888;margin-left:50px;"/>
                </div>
            验证码输入-->
            <!---
                <div class="know_confirm">
                <input type="checkbox"/>我已了解：一切后果此网站概不负责······
                </div>
                -->
            <!--确认预约
                <div class="confirm_all">
                    <a href="<?php echo base_url()?>RegUserPage/my_appointment">确认预约</a>
                </div>
            确认预约-->
    	</div>
    </body>



<!--一大堆无用代码-->
    <!--             <div >
            <?php if(empty($order_source_list))echo "<div class='table-bordered'><p>暂无号源</p></div>";?>
            
                <?php foreach($order_source_list as $value):?>
                <div class="table-bordered">
                日期：<?php echo $value["Date"];?><br>
                时段：<?php echo time_block_trans($value["Time"]);?><br>
                挂号费：<?php echo money_trans($value["Pay"]);?><br>
                
                已经预约数：<?php echo $value["Cur_Order_Source"];?><br>
                总量：<?php echo $value["Sum_Max"];?><br>
                状态：<?php if($value["Cur_Order_Source"]>=$value["Sum_Max"])echo "不";echo "可预约"; ?><br>
                <?php if($value["Cur_Order_Source"]<$value["Sum_Max"]){
                    echo "<form method='post'>";
                    echo "<input name='user_id' type='hidden' value='".$user_info["id"]."' />";
                    echo "<input name='source_order_id' type='hidden' value='".$value["sID"]."' />";
                    echo "<input type='submit' value='我要预约' />";
                    echo "</form>";
                    }?>
                    </div>
                <?php endforeach?>
            </div> -->