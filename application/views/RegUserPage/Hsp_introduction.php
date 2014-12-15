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
            <a class="col-md-2 guide_text_2" href="########">
                预约流程介绍
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
                <li class="active"><a class="navbar-brand" href="<?php echo base_url()?>RegUserPage/hsp_introduction">医院简介</a></li>
                <li><a href="<?php echo base_url()?>RegUserPage/hsp_doctor_list">预约挂号</a></li>
                <li><a href="#">就医经验</a></li>
                </div>
        </nav>
        <!--医院内部导航条-->

        <!--医院正式简介-->
        <div class="container hsp_intro_main">
            <div class="hsp_intro_name">小红帽成人医院</div>
            <hr class="hr_sty_1"/>
            <p class="hsp_intro_text">小红帽成人医院，是一所三级甲等大型综合性教学医院。医院占地面积12万平方米，建筑面积24.5万平方米，绿化面积4万平方米，核定床位1600张，全院职工3445人，其中医师1010余人(其中正副教授及各类高级科技人员593人)。拥有中国科学院院士陈竺、中国工程院院士王振义、陈赛娟等一大批在国内外享有较高知名度的医学专家。医院设有34个临床科室、9个医技科室;现有国家教育部重点学科3个(内分泌、血液、消化)，上海市重中之重学科1个(血液)，上海市重点学科1个(内分泌)，上海市优势学科一个(肾脏)，上海市教委重点学科6个(消化外科、血液科、内分泌科、骨科、烧伤科、心脏内科)，上海市卫生局医学领先专业重点学科3个(消化外科、血液科、肾脏内科)。医院还有6个市级研究所(上海市伤骨科研究所、上海市高血压研究所、上海市内分泌研究所 、上海烧伤研究所、上海血液学研究所、上海消化外科研究所)，2个校级研究所(上海交通大学医学院神经病学研究所、上海交通大学心血管病研究所)，1个院级研究所(感染病与呼吸病研究所)，8个校级研究室，3个院级实验室。此外，还建立了国家重点实验室和教育部重点实验室各1个(医学基因组学重点实验室)，2个卫生部重点实验室(人类基因组重点实验室、内分泌代谢重点实验室)，4个上海市重点实验室(人类基因组研究重点实验室、血管生物学重点实验室、中西医防治骨关节病损重点实验室、内分泌肿瘤重点实验室)。并通过整合上述科研力量，建立了附属瑞金医院生物医学研究院。同时，还建有与临床诊疗密切结合的一些中心，包括分子医学中心、糖尿病研究中心、血栓与止血研究中心、血液病诊治中心、基因诊断中心、眼科中心、青少年生长发育中心、介入治疗中心、生殖医学中心等。另外上海市卫生局有4个质量控制中心(康复、骨科、心脏介入、血液)挂靠在瑞金医院。瑞金医院于20世纪50年代成功抢救邱财康后，大面积烧伤治疗始终处于世界先进水平;70年代在国内率先开展了心脏和肝脏的移植手术;90年代在白血病分子生物学研究和临床医疗领域取得了重大进展;21世纪日臻完善的器官移植，使得许多病人将这里视为生命的绿洲。为此，医院获得了全国卫生系统先进集体(6次)、全国百佳医院;全国创建文明行业先进集体、全国卫生系统先进思想政治工作研究会;上海市文明单位(9次);全国模范职工之家;全国青年文明号、全国“五四”红旗团组织创建单位等。瑞金医院以所取得的成就和荣誉为动力，为了进一步适应市场需求，医院积极开展高精尖诊疗技术，如微创伤手术、关节镜手术、心血管介入治疗、眼科准分子激光术等</p>
            <p class="hsp_intro_text">上面全是废话、请不要在意</p>
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