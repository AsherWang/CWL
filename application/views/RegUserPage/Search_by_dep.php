<?php
/**
 * @Author: 2205
 * @Date:   2014-12-04
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-05
 */
//这里将是按医院查找的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/search_by_dep.css'?>" rel="stylesheet" type="text/css">
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
            <a class="col-md-1 guide_text_2 guide_text_3" href="########">
                快速预约
            </a>
            <a class="col-md-2 guide_text_2" href="########">
                预约流程介绍
            </a>
        </div>
        <!--导航条-->
        <div class="container main_container">
            <div class="dep_list">
                <div class="dep_title">
                    <span>内科</span>
                    <span></span>
                </div>
            </div>
        </div>