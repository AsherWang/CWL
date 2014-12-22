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
  <link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/Notice.css'?>' />
</head>
<body>
  <div class="row" id="HeaderDiv">
    <a class="col-md-3 HeaderText" id="HeaderHomeDiv" href="<?php echo base_url()?>IndexPage">
      <span class="glyphicon glyphicon-home HeaderText"></span>
      <span class="HeaderText" style="font-size:15px">首页</span>
    </a>
    <div class="col-md-4 col-md-offset-5" id="HeaderRightDiv">
               
          <a class="HeaderText" id="HeaderToNoticeLink" href="<?php echo base_url()?>NoticePage">查看公告</a> 
          <span class="HeaderStaticText HeaderDivide">|</span>
    <?php if(!$log){ ?>
  		<a class="HeaderText" id="HeaderLoginLink" href="<?php echo base_url()?>IndexPage">登录</a>
        <a class="HeaderText" id="HeaderRegisterLink" href="<?php echo base_url()?>LoginPage/regist">注册</a>
  	<?php }else{ ?>
        <?php if($session->userdata['user_type'] == "1" || $session->userdata['user_type'] == "2"){ ?>
        <!--  发布公告模块 -->
          <a class="HeaderText" id="HeaderRegisterLink" style="cursor:pointer" data-toggle="modal" data-target="#myModal">发布公告</a><span class="HeaderStaticText HeaderDivide">|</span>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">发布新的公告</h4>
                        </div>
                        <form action="<?php echo base_url();?>NoticePage" method="post">
                        <div class="modal-body">
                        
                            <p>公告标题：</p>
                            <input type="text" name="Title" class="form-control" id="CreateNoticeTitle" />
                            <p>公告内容: </p>
                            <textarea name="Content" id="CreateNoticeContentTextarea"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <input type="submit" class="btn btn-primary" value="确认发布" />
                        </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div>
          </div>
            
          <a class="HeaderText" id="HeaderNameLink" href=""><?php echo "管理员：".$session->userdata['username'];?></a>
        <?php }?>
        <?php if($session->userdata['user_type'] == "3" || $session->userdata['user_type'] == "4"){ ?>
        
              <a class="HeaderText" id="HeaderMyOrderLink" href="<?php echo base_url()?>RegUserPage/My_appointment">我的预约单</a>
              <span class="HeaderStaticText HeaderDivide">|</span>
              <a class="HeaderText" id="HeaderNameLink" href="#"><?php echo $session->userdata['username'];?></a>
              
        <?php }?>
         <?php if($isSuper){ ?>
      <a class="HeaderText" id="HeaderSuperLink" href="<?php echo base_url()?>SuperManagerPage/Index">权限狗专区</a>
    	<?php }?>
         <span class="HeaderStaticText HeaderDivide">|</span>
              <a class="HeaderText" id="HeaderNameLink" href="<?php base_url()?>IndexPage?do=exit">退出</a>
    <?php }?>

    
    </div>
  	<hr class="HeaderFooterHr" id="HeaderHr"/>
  </div>