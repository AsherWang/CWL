<?php
//管理用户的页面
//全局变量 $userNum, $pageNum;
$pageNum = $userListPageNum;

$colNum = 0;
//echo var_dump($userList[0]);
function isDateValid($date)//判断date 是否小于当前时间
{
    $dateNow = date("y-m-d h:i:s");
    if(strtotime($date) < strtotime($dateNow)){
        return true;
    }
    return false;
}
?>
<link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/superManager.css'?>'>
<div class="row">
    <div id="ManagerTitle">超级管理员，你好</div>
</div>
<div class="row" id="alert">
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
        <div class="PanelItem" id="PanelLogOut">
            <p href="#" class="PanelLink">退出该账号</p>
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
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ $di=$userList[$i]->ID;?>
                    <tr class="UserListTr" id="<?php echo 'UserListTr'.$di?>">
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td id="<?php echo 'UserListLabelTd'.$di?>">
                            <label>
                            <?php if(isDateValid($userList[$i]->Valid_Date)){?>
                            <span style="color:green" class="glyphicon glyphicon-ok"></span>
                            <?php }else{ ?>
                            <span style="color:red" class="glyphicon glyphicon-remove"></span>
                            <?php }?>
                            </label>
                        </td>
                        <td id="<?php echo 'UserListHiddenBtnsTd'.$di?>">
                            <input type="button" value="封" id="<?php echo 'UserListHiddenBtnFeng'.$di?>" />
                            <input type="button" value="解" id="<?php echo 'UserListHiddenBtnJie'.$di?>" />
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
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ $di=$userList[$i]->ID;?>
                    <tr class="UserListTr" id="<?php echo 'UserListTr'.$di?>">
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td id="<?php echo 'UserListLabelTd'.$di?>">
                            <label>
                            <?php if(isDateValid($userList[$i]->Valid_Date)){ ?>
                            <span style="color:green" class="glyphicon glyphicon-ok"></span>
                            <?php }else{ ?>
                            <span style="color:red" class="glyphicon glyphicon-remove"></span>
                            <?php }?>
                            </label>
                        </td>
                        <td id="<?php echo 'UserListHiddenBtnsTd'.$di?>">
                            <input type="button" value="封" id="<?php echo 'UserListHiddenBtnFeng'.$di?>" />
                            <input type="button" value="解" id="<?php echo 'UserListHiddenBtnJie'.$di?>" />
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
                for($i = 0+$start; $i<6+$start&&$i<$userNum; $i++){ $di=$userList[$i]->ID;?>
                    <tr class="UserListTr" id="<?php echo 'UserListTr'.$di?>">
                        <td><?php echo $userList[$i]->Name ?></td>
                        <td id="<?php echo 'UserListLabelTd'.$di?>">
                            <label>
                            <?php if(isDateValid($userList[$i]->Valid_Date)){?>
                            <span style="color:green" class="glyphicon glyphicon-ok"></span>
                            <?php }else{ ?>
                            <span style="color:red" class="glyphicon glyphicon-remove"></span>
                            <?php }?>
                            </label>
                        </td>
                        <td id="<?php echo 'UserListHiddenBtnsTd'.$di?>">
                            <input type="button" value="封" id="<?php echo 'UserListHiddenBtnFeng'.$di?>" />
                            <input type="button" value="解" id="<?php echo 'UserListHiddenBtnJie'.$di?>" />
                        </td>
                    </tr>
                <?php }?>
                </table>
            </div>
        </div>
        <div class="row" id="ManagerBtnDiv">
            <div class="col-md-2 col-md-offset-1 HowToUseText">
                <span style="color:green" class="glyphicon glyphicon-ok"></span>代表有效的用户
                <span style="color:red" class="glyphicon glyphicon-remove"></span>代表被封的用户
            </div>
            
            <input type="button" class="col-md-1 col-md-offset-4 form-contorl btn btn-default ManagerBtn" value="<" id="SMUserPrePageBtn">
            <input type="button" class="col-md-1 form-contorl btn btn-default ManagerBtn" value=">" id="SMUserNextPageBtn">
            
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

$("#PanelLogOut").click(function(){
    $.ajax({
        url:"<?php echo base_url();?>SuperManagerPage/LogOutBtnClick",
        type:"POST",
        datatype:"html",
        data:{},
        success:function(data){
            alert(data);
            location.href = "<?php echo base_url();?>IndexPage/Index";
        }
    });
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

//首先隐藏封禁按钮们
hideAllBtns();
function hideAllBtns()
{
    $("[id^='UserListHidden']").each(function(){
        $(this).hide();
    });
    $("[id^='UserListLabelTd']").each(function(){
        $(this).show(100);
    });
}

$("[id^='UserListTr']").click(function(){
    var fullId = $(this).attr("id");
    var id = fullId.substr(10, fullId.length-10);
    
    hideAllBtns();
    $("#UserListLabelTd"+id).hide();
    $("#UserListHiddenBtnsTd"+id).show(100);
    $("#UserListHiddenBtnFeng"+id).show(100);
    $("#UserListHiddenBtnJie"+id).show(100);
    
});

//忍法奥义*究极大千轮回北斗十字花式封印
$("[id^='UserListHiddenBtnFeng']").click(function(){
    var fullId = $(this).attr("id");
    var id = fullId.substr(21, fullId.length-10);

    $.ajax({
        url:"<?php echo base_url();?>SuperManagerPage/FengFengFeng",
        type:"POST",
        datatype:"html",
        data:{"ID":id},
        success:function(data){
            //$("#alert").html(data);
            alert(data);
            location.reload();
        }
    });
});

$("[id^='UserListHiddenBtnJie']").click(function(){
    var fullId = $(this).attr("id");
    var id = fullId.substr(20, fullId.length-10);

    $.ajax({
        url:"<?php echo base_url();?>SuperManagerPage/JieJieJie",
        type:"POST",
        datatype:"html",
        data:{"ID":id},
        success:function(data){
            //$("#alert").html(data);
            alert(data);
            location.reload();
        }
    });
});

$("#SMUserNextPageBtn").click(function(){
    var p = location.href.lastIndexOf("/");
    var urltmp = location.href.substr(p);
    var pageId;
    if(urltmp == "/" || urltmp == "/Index" || urltmp == "/SuperManagerPage"){
        pageId = "0";
    }else{
        pageId = urltmp.substr(1);
    }

    if(pageId != "7"){
        var pageIdNow = parseInt(pageId)+1;
        location.href = "<?php echo base_url();?>SuperManagerPage/Index/"+pageIdNow.toString(); 
    }
});

$("#SMUserPrePageBtn").click(function(){
    var p = location.href.lastIndexOf("/");
    var urltmp = location.href.substr(p);
    var pageId;
    if(urltmp == "/" || urltmp == "/Index" || urltmp == "/SuperManagerPage"){
        pageId = "0";
    }else{
        pageId = urltmp.substr(1);
    }

    if(pageId != "7"){
        var pageIdNow = parseInt(pageId)-1;
        location.href = "<?php echo base_url();?>SuperManagerPage/Index/"+pageIdNow.toString(); 
    }
});
</script>
