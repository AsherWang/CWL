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
            <p class="PanelLink">管理网站医院</p>
        </div>

        <div class="PanelItem" id="PanelToHomePage">
            <p href="#" class="PanelLink">回到主页面</p>
        </div>  
    </div>
    <div class="col-md-7 col-md-offset-1">
        <div class="row" id="SearchHospitalDiv">
            <div class="col-md-2" id="SearchHospitalLabelCol"><label>查找医院</label></div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="SearchHospitalInput"/>
            </div>
            
        </div>
        <div class="row" id="HospitalListDiv">
            <div class="col-md-5 HospitalColDiv">
                <table class="table table-striped">
                    <tr>
                        <td>北京某知名医院</td>
                        <td>
                            <label>三级甲等</label>
                        </td>
                    </tr>
                    <tr>
                        <td>上海薇薇安妇产科医院</td>
                        <td>
                            <label>二级</label>
                        </td>
                    </tr>
                    <tr>
                        <td>老王诊所</td>
                        <td>
                            <label>一级甲等</label>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1 HospitalHrCol">
                <table class="HospitalHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-5 HospitalCol">
                <table class="table table-striped">
                    <tr>
                        <td>北京某知名医院</td>
                        <td>
                            <label>三级甲等</label>
                        </td>
                    </tr>
                    <tr>
                        <td>上海薇薇安妇产科医院</td>
                        <td>
                            <label>二级</label>
                        </td>
                    </tr>
                    <tr>
                        <td>老王诊所</td>
                        <td>
                            <label>一级甲等</label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" id="ManagerBtnDiv">
            <div class="col-md-2 col-md-offset-1 HowToUseText">点击x可以封禁用户</div>
            
            <input class="col-md-1 col-md-offset-3 form-contorl btn btn-default ManagerBtn" value="<" id="ManagerPrePageBtn">
            <input class="col-md-1 form-contorl btn btn-default ManagerBtn" value=">" id="ManagerNextPageBtn">
            <input class="col-md-2 btn btn-default AddNewHospitalBtn" value="添加医院" id="ManagerAddHospitalBtn">
            
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
</script>