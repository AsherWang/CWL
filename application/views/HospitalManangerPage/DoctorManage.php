<div id="doccontainer"  class="container" style="margin-bottom:150px;">
     <div>
         <h1 class="page-header">
             CWL全国统一预约平台<small>----医生信息管理</small>
         </h1>
     </div>
<?php 
function utf8Substr($str, $from, $len) 
{ 
return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'. 
'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
'$1',$str); 
} 
?>
<!--医生列表-->
<div>
<h3>医生列表</h3>
</div>

<div style="width:700px;">
<?php if(!empty($doctor_list)):?>
<table class="table table-hover table-condensed table-bordered table-striped" style="text-align:center">
<thead><th>序号</th><th>医生姓名</th><th>所属科室</th><th>擅长</th><th>操作</th></thead>
<tbody>
<?php foreach($doctor_list as $key => $value):?>
<tr><td><?php echo $key+1;?></td><td><?php echo $value["Name"];?></td><td><?php echo $department_id_name[$value["Department_ID"]];?></td><td><?php echo utf8Substr($value["Expert"],0,30);?></td><td><a class="btn btn-primary btn-xs" href="<?php echo base_url();?>HospitalManangerPage/DoctorManage?do=delete&doctor_id=<?php echo $value["ID"];?>">删除</a></td></tr>
<?php endforeach?>
</tbody>
<tr><td colspan="8"><button class="btn btn-success" onClick="show()">添加</button></td></tr>
</table>
<?php else:?>
<div>贵院一个医生都木有咩？</div>
<?php endif?>
</div>
<!--医生列表-->

<!--添加医生-->
<div style="position:absolute;left:950px;top:180px;width:300px;height:600px;" id="adddoc">
<form class="form-horizontal" method="post" action="<?php echo base_url()?>HospitalManangerPage/DoctorManage?do=add">
<div class="control-group">
<label class="control-label" for="input01">选择科室:&nbsp&nbsp  </label>
<select name="add_department_id">
<option value="">--选择科室--</option>

<?php foreach($department_id_name as $key => $value):?>
<option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php endforeach?>
</select>
</div>
<div class="control-group" style="margin-top:20px;">
<input name="add_hospital_id" type="hidden" value="<?php echo $user_info["hospital_id"];?>" style="width:200px;">
</div>
<div class="control-group" style="margin-top:20px;">
<label class="control-label" for="input01">医生姓名:&nbsp&nbsp </label><input class="input-xlarge" name="add_doctor_name" type="text" style="width:200px;" />
</div>
<div class="control-group" style="margin-top:20px;">
<label class="control-label" for="input01">医生专精: &nbsp&nbsp </label><input class="input-xlarge" name="add_doctor_expert" type="text" style="width:200px;"/>
</div>
<div class="control-group" style="margin-top:20px;">
<label class="control-label" for="input01">医生简介: &nbsp&nbsp </label><textarea name="add_doctor_info"    style="width:200px;height:60px;"/></textarea>
</div>
<div class="control-group" style="margin-top:20px;">
<input class="btn btn-primary" type="submit" value="添加" />
<input class="btn btn-danger" onClick="return hideForm()" type="button"  value="关闭" />
</div>
</form>
</div>
<!--添加医生-->
<script type="text/jscript">
   $("#adddoc").hide();
	function show()
	{
		$("#adddoc").show();
	}
	function hideForm()
	{
		$("#adddoc").hide();
		return false;
	}


</script>



</div>