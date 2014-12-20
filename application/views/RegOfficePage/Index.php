<!DOCTYPE html> 
<html> 
<head> 
<title><?php echo $title;?></title> 
	 
     <meta name="keywords" content="keyword1,keyword2,keyword3"> 
     <meta name="description" content="this is my page"> 
     <meta name="content-type" content="text/html; charset=gbk"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/jquery.js'?>'></script> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.js'?>'></script> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap-theme.css'?>' type="text/css" /> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.min.css'?>' type="text/css" /> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.css'?>' type="text/css" /> 
</head> 
  <body>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url()?>RegOfficePage">CWL全国统一预约平台之医院挂号处</a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              	  
                  <li <?php if($pageIndex==1)echo "class='active'";?> ><a href="<?php echo base_url()?>RegOfficePage">订单列表&gt; &gt;</a></li>
                  <li class="divider-vertical"></li>
                  <li <?php if($pageIndex==2)echo "class='active'";?>><a href="">订单详情&gt; &gt;</a></li>
                   <li <?php if($pageIndex==3)echo "class='active'";?>><a href="<?php echo base_url()?>RegOfficePage/PrintOrder">打印挂号单</a></li>
                  <li><a>当前登陆者:<b><?php echo $admin_name;?></b></a></li>
                  <li><a href="<?php echo base_url()?>RegOfficePage?do=exit">退出管理</a></li>
              </ul>
          </div>
      </div>
  </div>

<br><br><br><br>
   <p>调试信息</p>
   <?php var_dump($debug_value);?>
   
   <?php 
   		function tansState($value)
		{
			if($value==2)return "已支付";
			return "未支付";
		}
   
   ?>