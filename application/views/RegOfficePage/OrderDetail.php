<?php

function money_trans($value)
{
	 $str = sprintf("￥%.2f",$value);
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

			


 ?><br>
 <div id="maincontainer">
   <!--startprint1-->

<div class="printContent" style="width:500px; border:1px  black solid;">
<p align="center"><b>挂号单</b></p>
订单ID：<?php echo $order_info["ID"];?><br>
订单价格：<?php echo money_trans($order_info["Pay"]);?><br>
订单状态：<?php echo tansState($order_info["State"]);?><br>


所属医院:<?php echo $order_hospital_info["Name"];?><br>
所属科室：<?php echo $order_department_info["Name"];?><br>
医生：<?php echo $order_doctor_info["Name"];?><br>
日期:<?php echo $order_info["Date"];?><br>
时段:<?php echo time_block_trans($order_info["Time"]);?><br>
下单者：<?php echo $order_user_info["Name"];?><br>
下单者身份证：<?php echo $order_user_info["ID_number"];?><br>
</div>
 <!--endprint1-->
<?php if($order_info["State"]==2){?>
 <div id="print">
 <input type="button" onclick="preview(1)" value="打印挂号单"/>
 </div>

<?php }else{?>
	<form method="post" action="<?php echo base_url();?>RegOfficePage/PayOrder">
	<input name="pay_id" value="<?php echo $order_info["ID"];?>" type="hidden" />
    <input type="submit" value="确认支付"/>
    </form>
<?php } ?>

</div>
<style type='text/css'>
body{text-algin:center;}
.printContent{text-algin:left; margin-top:80px; margin-left:auto; margin-right:auto;border:1px black solid;}

</style>


<script language="javascript">
        function preview(oper)
        {
            if (oper < 10){
            bdhtml=window.document.body.innerHTML;//获取当前页的html代码
            sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
            eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
            prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
            window.document.body.innerHTML="<style type='text/css'>body{text-algin:center;}.printContent{text-algin:left; margin-top:80px; margin-left:auto; margin-right:auto;border:1px black solid;}</style>"+prnhtml;
            window.print();
            window.document.body.innerHTML=bdhtml;
            }
        }
</script>
</body>
</html>