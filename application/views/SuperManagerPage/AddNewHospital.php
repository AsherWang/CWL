<?php
//管理医院的页面
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
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院大名</label>
            <div class="col-md-7">
                <input type="text" class="form-control" />
            </div>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院等级</label>
            <div class="col-md-7">
                <input type="text" class="form-control" />
            </div>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院所在区</label>
            <select class="col-md-2" style="height:30px; margin-left:15px">
                <option>北京</option>
                <option>上海</option>
                <option>广州</option>
                <option>湖南</option>
            </select>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院地址</label>
            <div class="col-md-7">
                <input type="text" class="form-control" />
            </div>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院电话</label>
            <div class="col-md-7">
                <input type="text" class="form-control" />
            </div>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院官方网址</label>
            <div class="col-md-7">
                <input type="text" class="form-control" />
            </div>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalNameDiv">
            <label class="col-md-2">医院详细介绍</label>
            <textarea id="NewHospitalDetailTA"></textarea>
        </div>
        <div class="row NewHospitalInputDiv" id="NewHospitalBtnDiv">
            <input type="button" class="col-md-2 col-md-offset-5 btn btn-default" value="确认添加" />
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

$("#MAAddHospitalConfirm").click(function(){
    var hospitalName = $("#MAHospitalName").val();
    var hospitalLevel = $("#MAHospitalLevel").val();

    $.ajax({
        type:"POST",
        url:"<?php echo base_url();?>SuperManagerPage/CreateHospital",
        dataType:"html",
        data:{"hospitalName":hospitalName, "hospitalLevel":hospitalLevel},
        success:function(data){
            console.log(data);
        }
    });
});

$("#ManagerAddHospitalBtn").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/AddNewHospital"
});
$("#PanelToAddHospitalPage").click(function(){
    location.href = "<?php echo base_url();?>SuperManagerPage/AddNewHospital"
});
</script>
