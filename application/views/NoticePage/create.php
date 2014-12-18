<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<link href='<?php echo base_url().'/res/css/create.css'?>' rel="stylesheet" type="text/css" />
	<title>发布公告</title>
</head>
<body>
    <h2 align="center">发布一条公告</h2>
    <?php echo validation_errors();?>
    <?php echo form_open('notice/create')?>
    <form>
        <div >
        <label for="title">标题</label>
        <input type="input" name="title" /><br/>
        <label for="content">公告内容</label>
        <textarea name="content"></textarea><br/>
        <input type="submit" name="submit" value="发布公告"/>
        </div>
    </form>
</body>
</html>