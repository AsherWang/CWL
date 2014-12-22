<!DOCTYPE html> 
<html> 
<head> 
<title><?php echo $title;?></title> 
	 
     <meta name="keywords" content="keyword1,keyword2,keyword3"> 
     <meta name="description" content="this is my page"> 
     <meta name="content-type" content="text/html;"  charset="utf-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/jquery.js'?>'></script> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.js'?>'></script> 
     <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script> 
        <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/jquery-ui.js'?>'></script> 
     
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap-theme.css'?>' type="text/css" /> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.min.css'?>' type="text/css" /> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.css'?>' type="text/css" /> 
     <link rel="stylesheet" href='<?php echo base_url().'res/css/jquery-ui.css'?>' type="text/css" /> 
     
<style type="text/css">
#FooterDiv{
	position:fixed;
	bottom:0px;
	width:100%;
	left:0px;
	background-color:#fff;
	text-align:center;
	font-size:15px;
	font-family:'Microsoft YaHei';

}
.order_list_table{
	text-align:center;
	}
.order_list_table td,.order_list_table th{
	border:1px solid #000;
	text-align:center;
	padding-left:3px;
	padding-right:3px;
}
.order_list_table th{
	background-color:#39F;
	color:#fff;
}

#addForm  td,th
{
    border:1px solid #000;
	text-align:center;
}
#addForm input ,#addForm select 
{
	width:100%;
}


	
</style>
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
                  <li <?php if($pageIndex==1)echo "class='active'";?> ><a href="<?php echo base_url()?>HospitalManangerPage">医院信息修改</a></li>
                  <li class="divider-vertical"></li>
                  <li <?php if($pageIndex==2)echo "class='active'";?>><a href="<?php echo base_url()?>HospitalManangerPage/UserManage">挂号处人员管理</a></li>
                                    <li <?php if($pageIndex==5)echo "class='active'";?>><a href="<?php echo base_url()?>HospitalManangerPage/DoctorManage">医生信息管理</a></li>
                 
                  <li <?php if($pageIndex==4)echo "class='active'";?>><a href="<?php echo base_url()?>HospitalManangerPage/OrderSource">号源管理</a></li>
                                    <li <?php if($pageIndex==3)echo "class='active'";?>><a href="<?php echo base_url()?>NoticePage">医院公告管理</a></li>
                  
                  <li><a href="<?php echo base_url()?>HospitalManangerPage?do=exit">退出管理</a></li>
              </ul>

          </div>
      </div>
  </div>

   <div>调试信息<?php var_dump($debug_value);?></div>