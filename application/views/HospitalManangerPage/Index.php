﻿<!DOCTYPE html> 
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
  <p>欢迎您，管理员 <u><?php echo $admin_name;?></u></p>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">CWL全国统一预约平台</a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">医院信息修改</a></li>
                  <li class="divider-vertical"></li>
                  <li><a href="#about">挂号处人员管理</a></li>
                  <li><a href="#contact">医院公告管理</a></li>
                  <li><a href="#contact">退出管理</a></li>

              </ul>

          </div>
      </div>
  </div>




 
     

   <div>调试信息<?php var_dump($debug_value);?></div>