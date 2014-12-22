<div>
这里就是传说|
医生列表|
删除医生|
添加医生|修改医生信息
<?php 
function utf8Substr($str, $from, $len) 
{ 
return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'. 
'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
'$1',$str); 
} 
?>
<!--医生列表-->
<div >
<?php if(!empty($doctor_list)):?>
<table>
<thead><th>序号</th><th>医生姓名</th><th>所属科室</th><th>擅长</th><th>操作</th></thead>
<tbody>
<?php foreach($doctor_list as $key => $value):?>
<tr><td><?php echo $key+1;?></td><td><?php echo $value["Name"];?></td><td><?php echo $department_id_name[$value["Department_ID"]];?></td><td><?php echo utf8Substr($value["Expert"],0,30);?></td><td><a href="<?php echo base_url();?>HospitalManangerPage/DoctorManage?do=delete&doctor_id=<?php echo $value["ID"];?>">删除</a></td></tr>
<?php endforeach?>
</tbody>
</table>
<?php else:?>
<div>贵院一个医生都木有咩？</div>
<?php endif?>
</div>
<!--医生列表-->
<hr>添加部分
<!--添加医生-->
<div>
<form method="post" action="<?php echo base_url()?>HospitalManangerPage/DoctorManage?do=add">
选择科室
<select name="add_department_id">
<option value="">--选择科室--</option>
<?php foreach($department_id_name as $key => $value):?>
<option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php endforeach?>
</select><br>
医生姓名<input name="add_doctor_name" type="text" /><br >
医生专精<input name="add_doctor_expert" type="text" /><br >
医生简介<textarea name="add_doctor_info"    /></textarea><br>
<input type="submit" value="添加" />
</form>
</div>
<!--添加医生-->



</div>