<?php
/**
 * @Author: 2205
 * @Date:   2014-12-13
 * @Last Modified by:   2205
 * @Last Modified time: 2014-12-13
 */
//这里将是快速预约的位置了
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo base_url().'/res/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'/res/css/RegUserPage/index.css'?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>res/css/RegUserPage/appointment_quickly.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
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
        <!--导航条-->
        <!--页面主体-->
        <div class="container main_container">
            <div class="row">
            <div class="col-md-3 container left_container">
                <div class="left_title_1">快速预约</div>
                <div class="left_text_1">帮助您快速找到选定条件下希望预约的医生</div>
                <div class="left_title_2">快速筛选</div>
                <div class="left_text_2">根据区域、医院、科室等快速筛选对应班次</div>
                <div class="left_title_2">适用人群</div>
                <div class="left_text_2">未确定具体病症，希望尽快就医确诊的普通患者</div>
            </div>
            <div class="col-md-8 container right_container">
                <div class="right_title_1">我知道医院名称</div>
                <hr class="right_hr_1"/>
                <div class="right_choose_main">
                    <div>
                        <span class="right_choose_text">地区</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>北京</option>
                            <option>上海</option>
                            <option>东莞</option>
                        </select>
                        <select class="right_choose right_choose_text"style="margin-left:20px">
                            <option selected="selected">--------请选择--------</option>
                            <option>海淀区</option>
                            <option>昌平区</option>
                            <option>红灯区</option>
                            <option>要求能够根据地区的不同而改变</option>
                        </select>
                    </div>
                    <div>
                        <span class="right_choose_text">医院</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>小红帽成人医院</option>
                            <option>小红帽成人医院</option>
                            <option>小红帽成人医院</option>
                        </select>
                    </div>
                    <div>
                        <span class="right_choose_text">科室</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>儿童外科</option>
                            <option>儿童外科</option>
                            <option>儿童外科</option>
                        </select>
                    </div>
                    <div class="confirm_link">
                        <a href="###">预约挂号</a>
                    </div>
                </div>

                <div class="right_title_2">我不知道医院名称</div>
                <hr class="right_hr_1"/>
                <div class="right_choose_main">
                    <div>
                        <span class="right_choose_text">地区</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>北京</option>
                            <option>上海</option>
                            <option>东莞</option>
                        </select>
                        <select class="right_choose right_choose_text"style="margin-left:20px">
                            <option selected="selected">--------请选择--------</option>
                            <option>海淀区</option>
                            <option>昌平区</option>
                            <option>红灯区</option>
                            <option>要求能够根据地区的不同而改变</option>
                        </select>
                    </div>
                    <div>
                        <span class="right_choose_text">类型</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>专科医院</option>
                            <option>大型综合医院</option>
                            <option>卫生部直属医院</option>
                        </select>
                    </div>
                    <div>
                        <span class="right_choose_text">等级</span>
                        <select class="right_choose right_choose_text">
                            <option selected="selected">--------请选择--------</option>
                            <option>三级甲等</option>
                            <option>三级</option>
                            <option>二级</option>
                            <option>一级</option>         
                        </select>
                    </div>
                    <div class="confirm_link">
                        <a href="###">预约挂号</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--页面主体-->