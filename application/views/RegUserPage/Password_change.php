<?php
/**
 * @Author: 2205
 * @Date:   2014-12-13
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-13
 */
//这里将是修改密码的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/personal_message_change.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/password_change.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!--引用的bootstrap的输入框，有待更改调整
                <div class="row">
        <div class="col-md-offset-3 col-md-6 main_search">
            <div class="input-group input-group-lg">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">search</button>
            </span>
            </div>
        </div>
        </div>
        引用的bootstrap的输入框，有待更改调整-->

        <!--导航条
        <div class="row guide">
            <span class="col-md-offset-1 col-md-1 guide_text_1">
                寻医：
            </span>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>res/css/RegUserPage/index">
                按医院查询
            </a>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>res/css/RegUserPage/search_by_dep">
                按科室查询
            </a>
            <a class="col-md-1 guide_text_2 guide_text_3" href="<?php echo base_url()?>res/css/RegUserPage/appointment_quickly">
                快速预约
            </a>
        </div>
        导航条-->

        <!--main container-->
        <div class="container main_container">
            <div class="row">
                <div class="col-md-3">
                    <img class="user_img img-circle" src="<?php echo base_url()?>res/images/doctor_1.jpg"/>
                </div>
                <div class="col-md-3">
                    <div class="main_title">账号设置</div>
                    <hr class="title_hr"/>
                    <div class="sec_title">修改密码</div>
                </div>
            </div>

            <!--二级导航条-->
            <div class="row sec_guide">
                <div class="col-md-2 sec_guide_text">
                    <a href="<?php echo base_url()?>RegUserPage/personal_message_change">个人信息</a>
                </div>
                <div class="col-md-2 sec_guide_text active">
                    <a href="<?php echo base_url()?>RegUserPage/password_change">修改密码</a>
                </div>
                <div class="col-md-2 sec_guide_text">
                    <a href="<?php echo base_url()?>RegUserPage/head_show">头像设置</a>
                </div>
            </div>
            <!--二级导航条-->
            <!--主体内容-->
            <div class="psw_main_change">
                <div class="row">
                    <div class="col-md-2 psw_left_text">
                        <span style="color:red;">*</span>
                        <span>原密码：</span>
                    </div>
                        <input class=" col-md-3 old_psw_text" type="text"/>
                </div>
                <div class="row">
                    <div class="col-md-2 psw_left_text">
                        <span style="color:red;">*</span>
                        <span>新密码：</span>
                    </div>
                        <input class=" col-md-3 old_psw_text" type="text"/>
                </div>
                <div class="row">
                    <div class="col-md-2 psw_left_text">
                        <span style="color:red;">*</span>
                        <span>确认密码：</span>
                    </div>
                        <input class=" col-md-3 old_psw_text" type="text"/>
                </div>
                <div class="psw_confirm">
                    <a href="<?php echo base_url()?>RegUserPage/personal_message_change">确认修改</a>
                </div>
            </div>
            <!--主体内容-->
        </div>