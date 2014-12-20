<?php
/**
 * @Author: 2205
 * @Date:   2014-12-12
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-12
 */
//这里将是医院简介的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/hsp_introduction.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!--引用的bootstrap的输入框，有待更改
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
        <!--医院名称-->
        <div class="container">
        <div class="row hsp_name">
            <span class="hsp_name_text"><?php  echo $hospital_info["Name"];?></span>
            <span class="label label-primary hsp_label_locate hsp_label_font"><?php  echo $hospital_info["Level"];?></span>
            <span class="label label-info hsp_label_font"><?php  echo $hospital_info["Type"];?></span>
              <span class="label label-default hsp_label_font"><a href="<?php echo $hospital_info["Website"];?>">网站传送门</a></span>
        </div>
        <!--医院名称-->

        <!--医院内部导航条-->
        <nav class="navbar navbar-default hsp_nav" role="navigation">
                <ul class="nav navbar-nav">
                <li class="active"><a class="navbar-brand" href="">医院简介</a></li>
                <li><a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list?hospital_id=<?php echo $hospital_id;?>">预约挂号</a></li>
        </nav>
        <!--医院内部导航条-->

        <!--医院正式简介-->
        <div class="container hsp_intro_main">
            <div class="hsp_intro_name"><?php  echo $hospital_info["Name"];?></div>
            <hr class="hr_sty_1"/>
            <p class="hsp_intro_text"><?php echo $hospital_info["Info"];?></p>
            <!--预约规则-->
            <div class="appo_rule_title">预约规则</div>
            <hr class="hr_sty_1"/>
            <div class="appo_rule_text">
                <div>可预约班次更新时间：每日7:30更新</div>
                <div>如遇专家班次停诊会以短信通知，请保持手机畅通</div>
                <div>1、儿科门诊预约14周岁以下患者（矮小症患者18周岁以下），其余科室预约14周岁以上患者</div>
                <div>2、预约周期：1至28天内</div>
                <div>3、取消时限：提前1日12：00前</div>
                <div>4、社保卡不能预约生殖门诊的所有专家</div>
                <div>5、病理科专家只看病理报告和片子</div>
            </div>
            <!--预约规则-->
        </div>
        <!--医院正式简介-->