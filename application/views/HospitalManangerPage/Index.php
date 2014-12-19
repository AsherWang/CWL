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
  <div class="container">
<p>欢迎您，管理员 <u><?php echo $admin_name;?></u></p>
 
            <div style="float: left">
          <ul style="list-style:none; float:left;">
            <li style="float:left;"><a class="btn btn-primary" style="width:200px" href="<?php echo base_url()?>HospitalManangerPage/">医院信息修改</a></li>
              <li style="float:left;"><a class="btn btn-primary" style="width:200px" href="<?php echo base_url()?>HospitalManangerPage/UserManagee">挂号处人员管理</a></li>
              <li style="float:left;"><a class="btn btn-primary" style="width:200px" href="<?php echo base_url()?>">医院公告管理</a></li>
                            <li style="float:left;"><a class="btn btn-primary" style="width:200px" href="<?php echo base_url()?>HospitalManangerPage?do=exit">退出管理</a></li>
          </ul>
      </div>
      
  </div>
   <div>调试信息<?php var_dump($debug_value);?></div>