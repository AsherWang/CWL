<?php
/**
 * @Author: 2205
 * @Date:   2014-12-15
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-15
 */
//页眉
?>
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
  <div id="HeaderDiv">
  		<span style="margin-left:5%;">您好！请滚去</span>
  		<a href="<?php echo base_url()?>IndexPage/Index" style="border-right:solid 1px black;padding-right:5px">登录</a>
  		<a href="<?php echo base_url()?>###" style="margin-left:3px">注册</a>
  		
  		<a href="<?php echo base_url()?>IndexPage" style="margin-left:60%;">首页</a>
  		<a href="<?php echo base_url()?>RegUserPage/Personal_message_change" style="margin-left:5px">个人中心</a>
  		<a href="<?php echo base_url()?>RegUserPage/My_appointment" style="margin-left:5px">我的预约单</a>
      <a href="<?php echo base_url()?>NoticePage/index" style="margin-left:5px">查看公告</a>
  	<hr class="HeaderFooterHr"/>
  </div>