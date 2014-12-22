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
        <!--导航条
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
        </div>
        导航条-->
    
    



        <!--选择框-->
        <table class="table-bordered hsp_choose_table">
        	<tr>
             	<td class="hsp_title">医院地区</td>
                <td>
                     <div class="row">
                        <a class="hsp_area" name="hsp_area" href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=">不限</a>
                        <?php foreach ($search_area_list as $value): 
                            foreach ($value as $hsp_area_item):?>
                            <span style="line-height:25px">
                            <a class = "hsp_area" 
                                href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $hsp_area_item?>" 
                                name="hsp_area"><?php echo $hsp_area_item ?></a>
                            </span>
                            <?php endforeach?>
                        <?php endforeach ?>  
                    </div>
                
                </td>
        	</tr>
            <tr>
                <td class="hsp_title">医院等级</td>
                <td>
                    <div class="row">
                        <a class="hsp_lev hsp_lev_choice" name="hsp_level" 
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >不限</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级甲等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >三级甲等</a>
                        <a class="hsp_lev" name="hsp_level" 
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级乙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >三级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=三级丙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >三级丙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级甲等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >二级甲等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级乙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >二级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=二级丙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >二级丙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级甲等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >一级甲等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级乙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >一级乙等</a>
                        <a class="hsp_lev" name="hsp_level"
                            href="<?php echo base_url()?>RegUserPage/Index?search_level=一级丙等&search_type=<?php echo $search_type?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>"
                            >一级丙等</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="hsp_title">医院类型</td>
                <td>
                    <div class="row">
                        <a class="hsp_type" name="hsp_type" href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=&search_area=<?php echo $search_area?>&search_box=<?php echo $search_box?>">不限</a>
                        <?php foreach ($search_type_list as $value): 
                            foreach ($value as$hsp_type_item):?>
                            <span style="line-height:25px">
                            <a class = "hsp_type" 
                                href="<?php echo base_url()?>RegUserPage/Index?search_level=<?php echo $search_level?>&search_type=<?php echo $hsp_type_item?>&search_box=<?php echo $search_box?>&search_area=<?php echo $search_area?>" 
                                name="hsp_type"><?php echo $hsp_type_item ?></a>
                            </span>
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
    var a = document.getElementsByName("hsp_area");
    
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
	
	
	    if ("<?php echo $search_area ?>" == ""){
        a[0].className = "hsp_area hsp_type_choice";
        for (var j=1; j<a.length; j++)
           a[j].className = "hsp_area";
    }else{
        for (var j=0; j<a.length; j++){
        if(a[j].innerHTML=="<?php echo $search_area ?>"){
            a[j].className="hsp_area hsp_type_choice";
            
        }
        else{
            a[j].className="hsp_area";
            }
        }
    }
	
	
	
}
window.onload = markHsp;
</script>

        <!--引用的bootstrap的输入框，有待更改调整-->
        <form action="<?php echo base_url()?>RegUserPage/Index" method="get">
        <div class="row">
        <div class="col-md-offset-3 col-md-6 main_search">
            <div class="input-group input-group-lg">
               <input name="search_type" type="hidden" class="form-control" value="<?php echo $search_type?>">
                          <input name="search_level" type="hidden" class="form-control" value="<?php echo $search_level?>">
            
                                      <input name="search_area" type="hidden" class="form-control" value="<?php echo $search_area?>">
            
            <input name="search_box" placeholder="医院" type="text" class="form-control" value="<?php echo $search_box?>">

            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">search</button>
            </span>
            </div>
        </div>
        </div>
        </form>
        <!--引用的bootstrap的输入框，有待更改调整-->





        <!--主体医院列表-->
        <table class="table table-striped table-hover hsp_table">
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
					
	<a href="<?php echo base_url()?>RegUserPage/Hsp_doctor_list?hospital_id=<?php echo $hospital_item['ID']?>&department_type="">去医院瞅瞅</a>
      
                    
                    
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
