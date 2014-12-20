<?php

function money_trans($value)
{
	 $str = sprintf("￥%.2f",$value);
	 return $str;
}


 echo"订单详情啊";?><br>
<div style="width:500px; border:1px  black solid;">
订单ID：<?php echo $order_info["ID"];?><br>
订单价格：<?php echo money_trans($order_info["Pay"]);?><br>
订单状态：<?php echo tansState($order_info["State"]);?><br>


所属医院:<?php echo $order_hospital_info["Name"];?><br>
所属科室：<?php echo $order_department_info["Name"];?><br>
医生：<?php echo $order_doctor_info["Name"];?><br>


下单者：<?php echo $order_user_info["Name"];?><br>
下单者身份证：<?php echo $order_user_info["ID_number"];?><br>
</div>
<?php if($order_info["State"]==2){?>



<form method="post" action="<?php echo base_url();?>RegOfficePage/PrintOrder">
	<input name="print_id" value="<?php echo $order_info["ID"];?>" type="hidden" />
    <input type="submit" value="打印挂号单"/>
</form>
<?php }else{?>
	<form method="post" action="<?php echo base_url();?>RegOfficePage/PayOrder">
	<input name="pay_id" value="<?php echo $order_info["ID"];?>" type="hidden" />
    <input type="submit" value="确认支付"/>
</form>
<?php 
} ?>
</body>
</html>