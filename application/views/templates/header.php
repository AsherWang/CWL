<?php
/**
 * @Author: 2205
 * @Date:   2014-12-15
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-15
 */
//页眉
//是否登陆
$log = 0;
if(isset($session->userdata['is_logged']))
{
  if($session->userdata['is_logged'] == true)
  $log = 1;
}

//是否是超级管理员
$isSuper = 0;
if(isset($session->userdata['user_type']))
{
  if($session->userdata['user_type'] == "1")
  $isSuper= 1;
}

?>
<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8">
  <script src='<?php echo base_url().'/res/js/jquery.js'?>'></script>
  <script src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>
  <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/bootstrap-theme.css'?>'>
  <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/bootstrap.min.css'?>'>
  <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/headerAndFooter.css'?>'>
</head>
<body>
  <div class="row" id="HeaderDiv">
    <a class="col-md-3 HeaderText" id="HeaderHomeDiv" href="<?php echo base_url()?>IndexPage">
      <span class="glyphicon glyphicon-home HeaderText"></span>
      <span class="HeaderText" style="font-size:15px">首页</span>
    </a>
    <div class="col-md-4 col-md-offset-5" id="HeaderRightDiv">
    <?php if(!$log){ ?>
		  <a class="HeaderText" id="HeaderLoginLink" href="<?php echo base_url()?>IndexPage/Index">登录</a>
  		<a class="HeaderText" id="HeaderRegisterLink" href="<?php echo base_url()?>###">注册</a>
  	<?php }else{ ?>
      <a class="HeaderText" id="HeaderToNoticeLink" href="<?php echo base_url()?>NoticePage/index">查看公告</a>
  		<span class="HeaderStaticText HeaderDivide">|</span>
      <a class="HeaderText" id="HeaderMyOrderLink" href="<?php echo base_url()?>RegUserPage/My_appointment">我的预约单</a>
      <span class="HeaderStaticText HeaderDivide">|</span>
      <a class="HeaderText" id="HeaderNameLink" href="<?php echo base_url()?>RegUserPage/Personal_message_change"><?php echo $session->userdata['username'];?></a>
    <?php }?>
    <?php if($isSuper){ ?>
      <a class="HeaderText" id="HeaderSuperLink" href="<?php echo base_url()?>SuperManagerPage/Index">权限狗专区</a>
    <?php }?>
    </div>
  	<hr class="HeaderFooterHr" id="HeaderHr"/>
  </div>