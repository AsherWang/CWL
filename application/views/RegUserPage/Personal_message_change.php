<?php
/**
 * @Author: 2205
 * @Date:   2014-12-13
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-13
 */
//这里将是修改个人信息的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/personal_message_change.css" rel="stylesheet" type="text/css">
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
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>RegUserPage/index">
                按医院查询
            </a>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>RegUserPage/search_by_dep">
                按科室查询
            </a>
            <a class="col-md-1 guide_text_2 guide_text_3" href="<?php echo base_url()?>RegUserPage/appointment_quickly">
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
                    <div class="sec_title">修改个人信息</div>
                </div>
            </div>

            <!--二级导航条-->
            <div class="row sec_guide">
                <div class="col-md-2 sec_guide_text active">
                    <a href="<?php echo base_url()?>RegUserPage/personal_message_change">个人信息</a>
                </div>
                <div class="col-md-2 sec_guide_text">
                    <a href="<?php echo base_url()?>RegUserPage/password_change">修改密码</a>
                </div>
                <div class="col-md-2 sec_guide_text">
                    <a href="<?php echo base_url()?>RegUserPage/head_show">头像设置</a>
                </div>
            </div>
            <!--二级导航条-->

            <div class="main_text">
                <div class="row">
                    <span class="col-md-2 main_left_text">登录名:</span>
                    <span class="col-md-8 no_change">***********(是手机号吗)</span>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">昵称:</span>
                    <a class="col-md-8" href="###">还没有设置(点击之后出现一个text输入框和一个确定按钮)</a>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">邮箱:</span>
                    <span class="col-md-8 no_change">***@buaa.edu.cn(这个应该不允许修改吧)</span>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">真实姓名:</span>
                    <span class="col-md-8 no_change">***</span>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">身份证号:</span>
                    <span class="col-md-8 no_change">**********</span>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">详细地址:</span>
                    <a href="###" class="col-md-8">还没有设置(点击之后出现一个text输入框和一个确定按钮)</a>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">注册时间:</span>
                    <span class="col-md-8 no_change">0000-00-00 00:00:00 (年月日、时分秒，看着添，反正不能修改)</span>
                </div>
                <div class="row">
                    <span class="col-md-2 main_left_text">联系手机:</span>
                    <a class="col-md-8" href="###">还没有设置(点击之后出现一个text输入框和一个确定按钮)</a>
                </div>
            </div>
        </div>
        <!--main container-->