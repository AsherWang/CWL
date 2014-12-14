<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>发布公告</title>
</head>
<body>
<h2>发布一条公告</h2>
<?php echo validation_errors();?>
<?php echo form_open('notice/create')?>
<label for="title">标题</label>
<input type="input" name="title" /><br/>

<label for="content">公告内容</label>
<textarea name="content"></textarea><br/>

<input type="submit" name="submit" value="发布公告"/>
</form>
</body>
</html>