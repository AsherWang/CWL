<?php
//管理用户的页面
//全局变量 $userNum, $pageNum;
$pageNum = 0;
$colNum = 0;
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
        <div class="row" id="SearchUserDiv">
            <div class="col-md-8 col-md-offset-1">
                <div class="input-group input-group-lg" id="SearchDiv">
                    <input name="search_box" type="text" class="form-control" id="SearchUserText">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="SearchUserBtn">查找用户</button>
                    </span>
                </div>
            </div>
            
        </div>
        <div class="row" id="UserListDiv">
            <div class="col-md-3 UserColDiv">
                <table class="table table-striped">
                <?php 
                $start=$pageNum*18 + $colNum*6;
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ ?>
                    <tr>
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                <?php }?>
                </table>
            </div>
            <div class="col-md-1 UserHrCol">
                <table class="UserHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-3 UserCol">
                <table class="table table-striped">
                <?php 
                $colNum++;
                $start=$pageNum*18 + $colNum*6;
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ ?>
                    <tr>
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                <?php }?>
                </table>
            </div>
            <div class="col-md-1 UserHrCol">
                <table class="UserHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-3 UserCol">
                <table class="table table-striped">
                <?php 
                $colNum++;
                $start=$pageNum*18 + $colNum*6;
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ ?>
                    <tr>
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td id="alert">
                            <label>x</label>
                        </td>
                    </tr>
                <?php }?>
                </table>
            </div>
        </div>
        <div class="row" id="ManagerBtnDiv">
            <div class="col-md-2 col-md-offset-1 HowToUseText">点击x可以封禁用户</div>
            
            <input type="button" class="col-md-1 col-md-offset-4 form-contorl btn btn-default ManagerBtn" value="<" id="ManagerPrePageBtn">
            <input type="button" class="col-md-1 form-contorl btn btn-default ManagerBtn" value=">" id="ManagerNextPageBtn">
            
        </div>
        <div class="row" id="ExTextDiv">
            <div class="col-md-2 col-md-offset-6 HowToUseText" style="margin-right:0px; padding-left:65px">上一页</div>
            <div class="col-md-2 HowToUseText" style="margin-left:0px; padding-left:32px">下一页</div>
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
    location.href = "<?php echo base_url();?>SuperManagerPage/AddNewHospital"
});
$("#PanelToAddHospitalPage").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/AddNewHospital"
});

$("#SearchUserBtn").click(function(){
    var searchTxt = $("#SearchUserText").val();

    $.ajax({
        url:"<?php echo base_url();?>SuperManagerPage/SearchUserBtnClick",
        type:"POST",
        datatype:"html",
        data:{"searchTxt":searchTxt},
        success:function(data){
            document.write(data);
        }
    });
});
</script>
