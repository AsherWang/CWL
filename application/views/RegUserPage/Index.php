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
        <!--引用的bootstrap的输入框，有待更改调整-->
        <form action="<?php echo base_url()?>RegUserPage/Index?search_box=<?php echo $search_level?>&search_type=<?php echo $search_type?>"method="get">
        <div class="row">
        <div class="col-md-offset-3 col-md-6 main_search">
            <div class="input-group input-group-lg">
            <input name="search_box" type="text" class="form-control" value="<?php echo $search_box?>">

            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">search</button>
            </span>
            </div>
        </div>
        </div>
        </form>
        <!--引用的bootstrap的输入框，有待更改调整-->

        <!--导航条-->
        <div class="row guide">
            <span class="col-md-offset-1 col-md-1 guide_text_1">
                寻医：
            </span>
            <a class="col-md-1 guide_text_2" href="<?php echo base_url()?>RegUserPage/Index">
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

        <!--选择框-->
        <table class="table-bordered hsp_choose_table">
            <tr>
                <td class="hsp_title">医院等级</td>
                <td>
                    <div class="row">
                        <a class="hsp_lev hsp_lev_choice" name="hsp_level" 
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=&search_type=<?php echo $search_type?>"
                            >不限</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级甲等&search_type=<?php echo $search_type?>"
                            >三级甲等</a>
                        <a class="hsp_lev" name="hsp_level" 
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级乙等&search_type=<?php echo $search_type?>"
                            >三级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级丙等&search_type=<?php echo $search_type?>"
                            >三级丙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级甲等&search_type=<?php echo $search_type?>"
                            >二级甲等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级乙等&search_type=<?php echo $search_type?>"
                            >二级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级丙等&search_type=<?php echo $search_type?>"
                            >二级丙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级甲等&search_type=<?php echo $search_type?>"
                            >一级甲等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级乙等&search_type=<?php echo $search_type?>"
                            >一级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级丙等&search_type=<?php echo $search_type?>"
                            >一级丙等</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="hsp_title">医院类型</td>
                <td>
                    <div class="row">
                        <a class="hsp_type"name="hsp_type" href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=">不限</a>
                        <?php foreach ($search_type_list as $value): 
                            foreach ($value as$hsp_type_item):?>
                            <a class = "hsp_type" 
                                href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=<?php echo $hsp_type_item?>" 
                                name="hsp_type"><?php echo $hsp_type_item ?></a>
                            <?php endforeach?>
                        <?php endforeach ?>  
                    </div>
                </td>
            </tr>
        </table>
        <!--选择框-->



<script language="javascript">
function markHsp(){
    var l = document.getElementsByName("hsp_level");
    var t = document.getElementsByName("hsp_type");
    
    if ("<?php echo $search_level ?>" == ""){
        l[0].className="hsp_lev hsp_lev_choice";
        for (var i=1; i<l.length; i++)
            l[i].className="hsp_lev";
    }else {
        for (var i=0; i<l.length; i++)
        {
            if(l[i].innerHTML == "<?php echo $search_level ?>"){
            l[i].className="hsp_lev hsp_lev_choice";
            }
            else{
                l[i].className="hsp_lev";
            }
        }
    }
    if ("<?php echo $search_type ?>" == ""){
        t[0].className = "hsp_type hsp_type_choice";
        for (var j=1; j<t.length; j++)
            t[j].className = "hsp_type";
    }else{
        for (var j=0; j<t.length; j++){
        if(t[j].innerHTML=="<?php echo $search_type ?>"){
            t[j].className="hsp_type hsp_type_choice";
            
        }
        else{
            t[j].className="hsp_type";
            }
        }
    }
}
window.onload = markHsp;
</script>



        <!--主体医院列表-->
        <table class="table table-striped table-hover hsp_table">
            <!-- <tr><td class="row">
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
            </td><tr> -->
            <?php foreach ($hospitals as $hospital_item): ?>
            <tr><td class="row">
                <img class="col-md-2" src="<?php echo base_url()?>res/images/hsp_picture.png"/>
                <div class="col-md-8">
                    <span class="row"><?php echo $hospital_item['Name']?></span>
                    <div class="row">
                        <span>电话：</span>
                        <span><?php echo $hospital_item['Phone']?></span>
                    </div>
                    <div class="row">
                        <span>地址：</span>
                        <span><?php echo $hospital_item['Address']?></span>
                    </div>
                </div>
                <div class="col-md-2 hsp_link">
                    <a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list
                    ">查看号源</a>
                </div>
            </td><tr>
            <?php endforeach ?>
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
