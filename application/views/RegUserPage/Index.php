<?php
/**
 * @Author: 2205
 * @Date:   2014-12-04
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-05
 */
//这里将是寻医首页的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>

        <!--待替换的页眉部分-->
        <div class="header">
        页眉
        </div>
        <!--待替换的页眉部分-->

        <!--引用的bootstrap的输入框，有待更改调整-->
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
        <!--引用的bootstrap的输入框，有待更改调整-->

        <!--导航条-->
        <div class="row guide">
            <span class="col-md-offset-1 col-md-1 guide_text_1">
                寻医：
            </span>
            <a class="col-md-1 guide_text_2" href="###">
                按医院查询
            </a>
            <a class="col-md-1 guide_text_2" href="####">
                按科室查询
            </a>
            <a class="col-md-1 guide_text_2" href="########">
                按病症查询
            </a>
            <a class="col-md-1 guide_text_2" href="########">
                快速预约
            </a>
        </div>
        <!--导航条-->

        <!--选择框-->
        <table class="table-bordered hsp_choose_table">
            <tr>
                <td class="hsp_title">医院等级</td>
                <td>
                    <div class="row">
                        <a class="hsp_lev hsp_lev_choice" href="###">不限</a>
                        <a class="hsp_lev" href="###">三级医院</a>
                        <a class="hsp_lev" href="###">二级医院</a>
                        <a class="hsp_lev" href="###">一级医院</a>
                        <a class="hsp_lev" href="###">（这里的页面跳转问题）</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="hsp_title">医院类型</td>
                <td>
                    <div class="row">
                        <a class="hsp_type hsp_type_choice" href="###">综合医院</a>
                        <a class="hsp_type" href="###">对外专科</a>
                        <a class="hsp_type" href="###">妇产科医院</a>
                        <a class="hsp_type" href="###">皮肤科医院</a>
                        <a class="hsp_type" href="###">不孕不育医院</a>
                        <a class="hsp_type" href="###">中医院</a>
                        <a class="hsp_type" href="###">口腔医院</a>
                        <a class="hsp_type" href="###">对外综合</a>
                        <a class="hsp_type" href="###">五官科医院</a>
                        <a class="hsp_type" href="###">泌尿科医院</a>
                    </div>
                    <div class="row">
                        <a class="hsp_type" href="###">综合医院</a>
                        <a class="hsp_type" href="###">对外专科</a>
                        <a class="hsp_type" href="###">妇产科医院</a>
                        <a class="hsp_type" href="###">皮肤科医院</a>
                        <a class="hsp_type" href="###">不孕不育医院</a>
                        <a class="hsp_type" href="###">中医院</a>
                        <a class="hsp_type" href="###">儿科医院</a>
                    </div>
                    <div class="row">
                        <span class="hsp_type">咱们的医院类型是不是这种？</span>
                    </div>
                </td>
            </tr>
        </table>
        <!--选择框-->

        <!--主体医院列表-->
        <table class="table table-striped table-hover hsp_table">
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row">小红帽成人医院</span>
                    <div class="row">
                        <span>电话：</span>
                        <span>000-00000000</span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span>Please guess</span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
        </table>
        <!--直接套用的bootstrap的组件-->
        <nav>
            <ul class="pagination pagination-sm page_sty">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2 <span class="sr-only"></span></a></li>
            <li><a href="#">3 <span class="sr-only"></span></a></li>
            <li><a href="#">4 <span class="sr-only"></span></a></li>
            <li><a href="#">5 <span class="sr-only"></span></a></li>
            <li><a href="#">6 <span class="sr-only"></span></a></li>
            <li><a href="#">7 <span class="sr-only"></span></a></li>
            <li><a href="#">8 <span class="sr-only"></span></a></li>
            <li><a href="#">9 <span class="sr-only"></span></a></li>
            <li><a href="#">&raquo;</a></li>
        </nav>
        <!--主体医院列表-->
