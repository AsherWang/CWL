<?php
/**
 * @Author: 2205
 * @Date:   2014-12-10
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-10
 */
//这里将是寻医首页的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <link href="<?php echo base_url()?>res/css/RegUserPage/hsp_doctor_list.css" rel="stylesheet" type="text/css">
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
        <!--医院名称-->
        <div class="container">
        <div class="row hsp_name">
            <span class="hsp_name_text">小红帽成人医院</span>
            <span class="label label-primary hsp_label_locate hsp_label_font">三级甲等</span>
            <span class="label label-info hsp_label_font">专业的</span>
            <span class="label label-default hsp_label_font">你懂的</span>
        </div>
        <!--医院名称-->

        <!--医院内部导航条-->
        <nav class="navbar navbar-default hsp_nav" role="navigation">
                <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="#">医院简介</a></li>
                <li class="active"><a href="#">预约挂号</a></li>
                <li><a href="#">就医经验</a></li>
                </div>
        </nav>
        <!--医院内部导航条-->
        <!--医院内部医生筛选-->
        <table class="table table-bordered dep_table">
            <tr>
                <td class="dep_table_choose">科室筛选</td>
                <td>
                    <div class="row">
                        <a class="dep_table_text">心脑外科</a>
                        <a class="dep_table_text">小儿麻痹</a>
                        <a class="dep_table_text">普通外科</a>
                        <a class="dep_table_text">肿瘤内科</a>
                        <a class="dep_table_text">神经病科</a>
                        <a class="dep_table_text">**科</a>
                        <a class="dep_table_text">神经病科</a>
                        <a class="dep_table_text">肿瘤内科</a>
                        <a class="dep_table_text">普通外科</a>
                        <a class="dep_table_text">小儿麻痹</a>
                        <a class="dep_table_text">心脑外科</a>
                    </div>
                    <div class="row">
                        <a class="dep_table_text">心脑外科</a>
                        <a class="dep_table_text">小儿麻痹</a>
                        <a class="dep_table_text">普通外科</a>
                        <a class="dep_table_text">肿瘤内科</a>
                        <a class="dep_table_text">神经病科</a>
                        <a class="dep_table_text">**科</a>
                        <a class="dep_table_text">神经病科</a>
                        <a class="dep_table_text">肿瘤内科</a>
                        <a class="dep_table_text">普通外科</a>
                        <a class="dep_table_text">小儿麻痹</a>
                        <a class="dep_table_text">心脑外科</a>
                    </div>
                    <div class="row">
                        <span class="dep_table_text">一个医院这么多科室应该够了</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="dep_table_choose">医生职称</td>
                <td>
                    <div class="row">
                        <a class="dep_table_text">主任医师</a>
                        <a class="dep_table_text">副主任医师</a>
                        <a class="dep_table_text">教授</a>
                        <a class="dep_table_text">副教授</a>
                        <a class="dep_table_text">专家</a>
                        <a class="dep_table_text">其他(会有人点这个吗)</a>
                    </div>
                    <div class="row">
                        <a class="dep_table_text">医院里面医生的职称还有还是什么可以放上来的？？？</a>
                    </div>
                </td>
            </tr>
        </table>
        <!--医院内部医生筛选-->
        <!--医生列表-->
        <table class="table table-bordered table-hover doctor_list">
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                    <img src="<?php echo base_url()?>res/images/doctor_1.jpg" class="col-md-2 img-circle doctor_img" />
                    <div class="col-md-2 doctor_intro">
                        <div class="doctor_name">XXX(不告诉你)</div>
                        <div class="doctor_intro_1">**科</div>
                        <div class="doctor_intro_2">主治医师</div>
                    </div>
                    <div class="col-md-6 doctor_expert">
                        <div class="doctor_expert_title">擅长：</div>
                        <div class="doctor_expert_text">**************************************************************************************此处全部省略(你猜啊，猜啊)</div>
                    </div>
                    <div class="col-md-2 go_next_link">
                        <a href="###">去挂号</a>
                </div>
                </td>
            </tr>
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
        <!--医生列表-->
    </div>