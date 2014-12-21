<?php
/**
 * @Author: 2205
 * @Date:   2014-12-10
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-10
 */
//这里将是查看我的预约单位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/my_appointment.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!--引用的bootstrap的输入框，有待更改调整
        <div class="row">
        <div class="col-md-offset-3 col-md-6 main_search">
            <div class="input-group input-group-lg">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">search</button>
            </span>
            </div>
        </div>
        </div>
        引用的bootstrap的输入框，有待更改调整-->

        <!--导航条
        <div class="row guide">
            <span class="col-md-offset-1 col-md-1 guide_text_1">
                寻医：
            </span>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>RegUserPage/index">
                按医院查询
            </a>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>RegUserPage/search_by_dep">
                按科室查询
            </a>
            <a class="col-md-1 guide_text_2 guide_text_3" href="<?php echo base_url()?>RegUserPage/appointment_quickly">
                快速预约
            </a>
        </div>
        导航条-->
        <div class="container main_container">
            <div class="row">
            <!--左侧栏目(用户基本信息)-->
                <div class="col-md-2 left_container">
                    <img class="user_img img-circle" src="<?php echo base_url()?>res/images/doctor_1.jpg">
                    <div class="user_name"><?php echo $user_info["username"];?></div>
                    <hr class="left_hr_1"/>
                    <div>
                        <span class="user_mes">个人信息</span>
                        <a class="change_mes" href="<?php echo base_url()?>RegUserPage/personal_message_change">修改</a>
                    </div>
                    <hr class="left_hr_2">
                    <div class="detail_mes">
                        <div><span>身份证号：</span><span><?php echo $user_info["id_number"];?></span></div>
                        <div><span>联系方式：</span><span><?php echo $user_ext_info["Phone"];?></span></div>
                    </div>
                    </div>
            <!--左侧栏目(用户基本信息)-->
            <?php var_dump($order_list);?>
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
            <!--右侧栏目(用户预约单)-->
                <div class="col-md-10 right_container">
                    <div class="appointment_title">
                        我的预约单
                    </div>
                    <hr class="hr_right" />
					
                    <table class="table appointment_main">
                    <?php foreach($order_list as $key=> $value):?>
                    <tr><td>
                    	<div><?php echo $key+1; ?>#</div>
                        <div>
                            <span>挂号医院：</span><span><?php echo $value["hName"];?></span>
                        </div>
                        <div>
                            <span>挂号科室：</span><span><?php echo $value["pName"];?></span>
                            <span class="locate_sty_1">挂号医生：</span>
                            <span><?php echo $value["dName"];?></span>
                        </div>
                        <div>
                            <span>门诊时间：</span><span><?php echo $value["Date"];?></span>
                            <span class="locate_sty_2">具体时间：</span>
                            <span><?php echo time_block_trans($value["Time"]);?></span>
                        </div>
                        <div>
                            <span>挂号费：</span><span><?php echo money_trans($value["Pay"]);?></span>
                            <span class="locate_sty_3">支付状态：</span>
                            <span><?php if($value["State"]!=2)echo "未支付";else echo "已支付"; ?></span>
                        </div>
                        <div class="operation_choice">
                            <span>操作：</span>
                            <a href="###">取消预约</a>
                            <a href="###" class="operation_text">预览挂号单</a>
                            <a href="###" class="operation_text">去支付</a>
                        </div>
                    </td></tr>
                    <?php endforeach?>
                    </table>
                </div>
            <!--右侧栏目(用户预约单)-->
            </div>
        </div>