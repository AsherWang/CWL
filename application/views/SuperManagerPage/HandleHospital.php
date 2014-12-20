<?php
//管理医院的页面
$hosNum = $hospitalNum;
$pageNum = 0;
?>
<link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/superManager.css'?>'>
<div class="row">
    <div id="ManagerTitle">超级管理员，你好</div>
</div>
<div class="row">
    <div class="col-md-2 panel" id="ManagerControlPanel">
        <div class="PanelItem" id="PanelToUserPage">
            <p href="#" class="PanelLink">管理网站用户</p>
        </div>
        <div class="PanelItem" id="PanelToHospitalPage">
            <p class="PanelLink">查看所有医院</p>
        </div>
        <div class="PanelItem" id="PanelToAddHospitalPage">
            <p class="PanelLink">添加新医院</p>
        </div>
        <div class="PanelItem" id="PanelToHomePage">
            <p href="#" class="PanelLink">回到主页面</p>
        </div>  
    </div>
    <div class="col-md-7 col-md-offset-1">
        <div class="row" id="SearchHospitalDiv">
            <div class="col-md-8 col-md-offset-1">
                <div class="input-group input-group-lg" id="SearchDiv">
                    <input name="search_box" type="text" class="form-control" id="SearchHospitalText">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="SearchHospitalBtn">查找医院</button>
                    </span>
                </div>
            </div>
            
        </div>
        <div class="row" id="HospitalListDiv">
            <div class="col-md-5 HospitalColDiv">
                <table class="table table-striped">
                <?php for($i=0+$pageNum*10; $i<$hospitalNum&&$i<$pageNum*10+5; $i++){?>
                    <tr>
                        <td><?php echo $hospitalList[$i]->Name; ?></td>
                        <td>
                            <label><?php echo $hospitalList[$i]->Level; ?></label>
                        </td>
                    </tr>
                <?php $hosNum--; }?>
                </table>
            </div>
            <div class="col-md-1 HospitalHrCol">
                <table class="HospitalHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-5 HospitalCol">
                <table class="table table-striped">
                <?php for($i=5+$pageNum*10; $i<$hospitalNum&&$i<$pageNum*10+10; $i++){?>
                    <tr>
                        <td><?php echo $hospitalList[$i]->Name; ?></td>
                        <td>
                            <label><?php echo $hospitalList[$i]->Level; ?></label>
                        </td>
                    </tr>
                <?php $hosNum--; }?>
                </table>
            </div>
        </div>
        <div class="row" id="ManagerBtnDiv">

            <input type="button" class="col-md-1 col-md-offset-6 btn btn-default ManagerBtn" value="<" id="ManagerPrePageBtn">
            <input type="button" class="col-md-1 btn btn-default ManagerBtn" value=">" id="ManagerNextPageBtn">
            <input type="button" class="col-md-2 btn btn-default AddNewHospitalBtn" value="添加医院" id="ManagerAddHospitalBtn">
            
        </div>
        <div class="row" id="ExTextDiv">
            <div class="col-md-2 col-md-offset-6 HowToUseText" style="margin-right:0px; padding-left:10px">上一页</div>
            <div class="col-md-2 HowToUseText" style="margin-left:-32px; padding-left:0px">下一页</div>
        </div>
    </div>
</div>
<script type="text/javascript">
$("#PanelToHospitalPage").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/HandleHospital";
});

$("#PanelToUserPage").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/Index";
});

$("#PanelToHomePage").click(function(){
    location.href = "<?php echo base_url();?>IndexPage/";
});


$("#ManagerAddHospitalBtn").click(function(){
    
});

$("#PanelToAddHospitalPage").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/AddNewHospital";
});

$("#SearchHospitalBtn").click(function(){
    var searchTxt = $("#SearchHospitalText").val();

    $.ajax({
        url:"<?php echo base_url();?>SuperManagerPage/SearchHospitalBtnClick",
        type:"POST",
        datatype:"html",
        data:{"searchTxt":searchTxt},
        success:function(data){
            document.write(data);
        }
    });
});
</script>
