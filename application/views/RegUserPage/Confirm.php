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
    				<th>挂号费</th>
    			</thead>
    			<tr class="doc_mes_text">
    				<td>
    					<div class="row">
    					<img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-4 img-circle doctor_img" />
    						<div class="doc_intro">
    						<span class="doc_name">***</span>
    						<div class="doc_intro_text">主治医师</div>
    						<div class="doc_intro_text">小儿外科、门诊外科</div>
    						</div>
    					</div>
    				</td>
    				<td>小红帽成人医院</td>
    				<td>门诊儿外</td>
    				<td class="cost">&yen;999999.0</td>
    			</tr>
    		</table>
    		<!--确认医生信息-->

    		<!--选择就诊日期-->
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
            <!--选择就诊日期-->
            <!--选择就诊时间-->
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
            <!--选择就诊时间-->
            <!--选择就诊人-->
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
            <!--选择就诊人-->

    		<!--验证码输入-->
                <div class="choose_date">请输入图片验证码</div>
                <div class="row ver_code">
                    <input class="ver_text" type="text"/>
                    <span style="color:#888888;margin-left:50px;">这里放一个图片验证码(四个字符)</span>
                </div>
            <!--验证码输入-->
                <div class="know_confirm">
                <input type="checkbox"/>我已了解：一切后果此网站概不负责······
                </div>
            <!--确认预约-->
                <div class="confirm_all">
                    <a href="<?php echo base_url()?>RegUserPage/my_appointment">确认预约</a>
                </div>
            <!--确认预约-->
    	</div>
    </body>