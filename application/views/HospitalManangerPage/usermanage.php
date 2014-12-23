<div class="container"style="margin-bottom:150px;">
    <div style="margin-left:30px;">
    <h1 class="page-header">
        CWL全国统一预约平台<small>----挂号处人员管理</small>
    </h1>
    </div>
    <div style="float: left;width:700px;margin-left:30px;">
        <h3>挂号处人员列表</h3>
       		<br/>
            <form method="get" class="form-search">
            根据姓名查找：　<input class="input-medium search-query" name="search_name" type="text"/>
            <input class="btn btn-primary btn-sm" type="submit" value="查询"/>
        	</form>

        <br/>

        <table class="table table-condensed table-bordered table-striped" style="text-align: center">
            <thead><tr><th>ID</th><th>身份证号</th><th>名字</th><th>权限等级</th><th>封禁到期时间</th><th>负责医院ID</th><th>删除</th></tr></thead>

        <?php
             foreach($user_list as $key =>$value){
                  echo "<tr>
                  	<td>{$value['ID']}</td>
                  	<td>{$value['ID_number']}</td>
                  	<td>{$value['Name']}</td>
                  	<td>{$value['Autority']}</td>
                  	<td>{$value['Valid_Date']}</td>
                  	<td>{$value['Hospital_ID']}</td>
                  	<td><a class='btn btn-primary btn-xs' 
                  	href='".base_url()."HospitalManangerPage/UserManage?do=delete&user_id={$value['ID']}'>删除</a></td>
                   	</tr>";
            }
            

        ?>
        <tr><td colspan="8"><button class="btn btn-success" onClick="show()">添加</button></td></tr>
        </table>
       
    </div>


    
    <div id="addworker" style="float: right;margin-right:50px;">
        <form class="form-horizontal" method="post">
            <fieldset>
                <div id="legend" class="">
                    <legend class="">添加挂号处人员</legend>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input01">姓名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input style="width: 180px;" name="user_name" type="text" class="input-xlarge"/>
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">身份证号:&nbsp;</label>
                    <input name="user_ID_number" style="width: 180px;" type="text" class="input-xlarge">
                </div>
                <br/>
                <div class="control-group">
                    <label class="control-label" for="input01">管理权限：        </label>
                    <input name="user_autority"  value=3 style="border-style:none" type="text" readonly="readonly" >
                </div>
                <br/> 
                	<label class="control-label" for="input01">医院ID： &nbsp;&nbsp;&nbsp;</label>
                    <input name="hospital_id" value="<?php echo $user_info['hospital_id']?>" style="border-style:none" readonly="readonly" >
                <br/>
                <br/>
                <div class="control-group">
                    <div class="controls" style="margin-left:60px;">
                    	<input class="btn btn-primary" type="submit" name="submit" value="添加"/>
                        <input class="btn btn-danger" onClick="return hideForm()" type="button"  value="关闭" />
                    </div>
                </div>
            </fieldset>
        </form>
        </div>

        <script type="text/jscript">
            $("#addworker").hide();
            function show()
            {
                $("#addworker").show();
            }
            function hideForm()
            {
                $("#addworker").hide();
                return false;
            }

           
        </script>

</div>
</body>
</html>