<?php
//管理用户的页面
?>
<link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/superManager.css'?>'>
<div class="row">
    <div id="ManagerTitle">超级管理员，你好</div>
</div>
<div class="row">
    <div class="col-md-2 panel" id="ManagerControlPanel">
        <div class="PanelItem">
            <p href="#" class="PanelLink">管理网站用户</p>
        </div>
        <div class="PanelItem">
            <p href="#" class="PanelLink">管理网站医院</p>
        </div>
        <div class="PanelItem">
            <p href="#" class="PanelLink">回到主页面</p>
        </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
        <div class="row" id="SearchUserDiv">
            <div class="col-md-2" id="SearchUserLabelCol"><label>查找用户</label></div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="SearchUserInput"/>
            </div>
            
        </div>
        <div class="row" id="UserListDiv">
            <div class="col-md-3 UserColDiv">
                <table class="table table-striped">
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1 UserHrCol">
                <table class="UserHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-3 UserCol">
                <table class="table table-striped">
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1 UserHrCol">
                <table class="UserHr">
                    <tr><td></td></tr>
                </table>
            </div>
            <div class="col-md-3 UserCol">
                <table class="table table-striped">
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>小耿</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>大力</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                    <tr>
                        <td>话痨</td>
                        <td>
                            <label>x</label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" id="ManagerBtnDiv">
            <div class="col-md-2 col-md-offset-1 HowToUseText">点击x可以封禁用户</div>
            
            <input class="col-md-1 col-md-offset-4 form-contorl btn btn-default ManagerBtn" value="<" id="ManagerPrePageBtn">
            <input class="col-md-1 form-contorl btn btn-default ManagerBtn" value=">" id="ManagerNextPageBtn">
            
        </div>
        <div class="row" id="ExTextDiv">
            <div class="col-md-2 col-md-offset-6 HowToUseText" style="margin-right:0px; padding-left:65px">上一页</div>
            <div class="col-md-2 HowToUseText" style="margin-left:0px; padding-left:32px">下一页</div>
        </div>
    </div>
</div>
