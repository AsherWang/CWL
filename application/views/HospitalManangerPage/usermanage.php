<div class="container">

    <h1 class="page-header">
        CWL全国统一预约平台<small>----挂号处人员管理</small>
    </h1>
    <div style="float: left">
        <h3>挂号处人员列表</h3>
            <form class="form-search">请输入用户ID：　<input class="input-medium search-query" type="text"/>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="#">查询</a></form>
            <!--<table class="table table-condensed table-bordered table-striped">
                <thead><tr><th>姓名</th><th>身份证号</th><th>电话</th><th>删除</th><th>修改</th></tr></thead>
                <tbody>
                <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
                <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
                <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
                <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>

                </tbody>
        </table>-->
        <table class="table table-condensed table-bordered table-striped">
            <thead><tr><th>ID</th><th>身份证号</th><th>名字</th><th>权限等级</th><th>封禁到期时间</th><th>负责医院ID</th><th>删除</th><th>修改</th></tr></thead>

        <?php
             foreach($user_list as $key =>$value){
                  echo "<tr><td>{$value['ID']}</td><td>{$value['ID_number']}</td><td>{$value['Name']}</td><td>{$value['Autority']}</td><td>{$value['Valid_Date']}</td>
                  <td>{$value['Hospital_ID']}</td><td><a class='btn btn-primary btn-xs' href='usermanage.php?user_ID={$value['ID']}'>删除</a></td><td><a class='btn btn-primary btn-xs' href='#'>修改</a></td></tr>";
            }

        ?>
            </table>
        <div  style="text-align: center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <div style="float: left">
        <form class="form-horizontal">
            <fieldset>
                <div id="legend" class="">
                    <legend class="">管理人员修改</legend>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input01">ID　　　　　：</label>
                    <input style="width: 300px;" name="h_Name" type="text" placeholder="11" class="input-xlarge"/>
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">身份证号　　：</label>
                    <input name="h_Type" style="width: 300px;" type="text" placeholder="333333333333333333" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">名字　　　　：</label>
                    <input name="h_Level"  style="width: 300px;" type="text" placeholder="我是医院挂号处" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">权限等级　　：</label>
                    <input name="h_Level"  style="width: 300px;" type="text" placeholder="３" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">封禁到期时间：</label>
                    <input name="h_Area" style="width: 300px;" type="text" placeholder="1000-01-01 00:00:00" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">负责医院ID　：</label>
                    <input name="h_Address" style="width: 300px;" type="text" placeholder="２" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <div class="controls">
                        <button class="btn btn-primary">点击提交</button>
                    </div>
            </fieldset>
        </form>
        </div>

</div>
</body>
</html>