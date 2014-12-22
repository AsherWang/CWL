<div>
<hr>
显示本医院的号源的列表
<div>

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
	function get_time_array()
	{
		$result=array(
			"08:00-08:59",
			"09:00-09:59",
			"10:00-10:59",
			"14:00-14:59",
			"15:00-15:59",
			"16:00-16:59"
		);
		return $result;
	}
	
?>
<?php if(!empty($order_list)):?>

	<table class="order_list_table">
    	<thead><tr><th>&nbsp;序号&nbsp;</th><th>医生</th><th>科室</th><th>日期</th><th>&nbsp;时段&nbsp;</th><th>&nbsp;最大预约数&nbsp;</th><th>&nbsp;操作&nbsp;</th></tr></thead>
        <tbody>
        	<?php foreach($order_list as $key=> $value): ?>
            <tr><td><?php echo $key+1;?></td><td><?php echo $value["dName"];?></td><td><?php echo $value["pName"];?></td><td><?php echo $value["Date"];?></td><td><?php echo time_block_trans($value["Time"]);?></td><td><?php echo $value["Sum_Max"];?></td><td><a href="<?php base_url()?>HospitalManangerPage/OrderSource?do=delete&order_id=<?php echo $value["ID"];?>">删除</a></td></tr>
            <?php endforeach ?>
            <tr><td colspan="8"><button onClick="show()">添加</button></td></tr>
        </tbody>
    </table>
   
<?php else:?>
	嗯，暂无号源.....
<?php endif?>
<br><br>
<div id="addForm">
	<form action="?do=add" method="post">
    <table>
    <thead><tr><th colspan="2">添加号源</th></tr></thead>
    <tbody><tr><td>
    	<input type="hidden" name="add_hospital_id" value="<?php echo $user_info["hospital_id"];?>"   />
        医生</td><td><select name="add_doctor_id">
        <option value="">--选择医生--</option>
        <?php foreach($doctor_id_name as $key=> $value): ?>
        	<option value="<?php echo $value["ID"];?>"><?php echo $value["Name"];?></option>      
        <?php endforeach ?>
        </select></td></tr>
        <tr><td>日期 </td><td><input name="add_Date" type="text" id="datepicker"></td></tr>
        <tr><td>时段</td><td><select name="add_Time" >
         <option value="">--选择时段--</option>
        <?php foreach(get_time_array() as $key=> $value): ?>
        	<option value="<?php echo $key;?>"><?php echo $value;?></option>      
        <?php endforeach ?>
        </select></td></tr>
        <tr><td>最大预约数</td><td><input name="add_Max_Sum" /></td></tr>
        <tr><td>挂号费用(元)</td><td><input name="add_Pay" /></td></tr>
        <tr><td><input type="submit" value="添加" /></td><td>
        <input onClick="return hideForm()" type="button"  value="关闭" />
        </td></tr>
       </tbody></table>
            </form>
</div>
<script type="text/jscript">
$("#addForm").hide();
function show()
{
	$("#addForm").show();
}
function hideForm()
{
	$("#addForm").hide();
	return false;
}

$(document).ready(function() {
  $("#datepicker").datepicker({dateFormat:"yy-mm-dd"});
});
</script>
</div>
</div>
<div style="height:800px;">
</div>