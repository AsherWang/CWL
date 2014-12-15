<<<<<<< HEAD
<meta charset="utf-8">
<div class="listbox">
		<?php foreach ($notice as $notice_item): ?>
			<dl>
				<dd><a target="_blank" href="http://localhost:8080/CWL/index.php/notice/<?php echo $notice_item['ID']?>"><?php echo $notice_item['Title'] ?></a>></dd>
				<dt><?php echo $notice_item['Date'] ?></dt>
			</dl>
		<?php endforeach ?>
</div>

=======
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/bootstrap.min.css'?>'>
    <script src='<?php echo base_url().'/res/js/Notice.js'?>'></script>
    <title></title>
</head>
<body>
    <div id="header">
        <nav class="navbar navbar-inverse" role="navigation" id="logo">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CWL全国统一预约平台</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">公告</a></li>
                    <li><a href="#">预约挂号</a></li>
                    <li><a href="#">返回首页</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="logo1">
                    <li><a href="#">登录/注册</a></li>
                    <li><a href="#">用户中心</a></li>
                </ul>
            </div>
       </nav>
    </div>
    <div class="div_out_css" id="new_notice">
        <div class="div_in_css" id="notice">
            <?php foreach ($notice as $notice_item): ?>
                <div id="main">
                    <a class="title" style="float:left"  href="http://localhost:8080/CWL/index.php"><?php echo $notice_item['Title'] ?></a>
                    <p style="float:right;font-size:14px"><?php echo $notice_item['Date']?></p>
                    <br>
                    <hr style="border:1px dashed #87cefa">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>
>>>>>>> a951dc45a68f9230a24b7ea5440887c51ec7fbdf
