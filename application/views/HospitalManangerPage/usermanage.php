<!DOCTYPE html>
<html>
<head>
    <title>dingdan.html</title>

    <meta name="keywords" content="keyword1,keyword2,keyword3">
    <meta name="description" content="this is my page">
    <meta name="content-type" content="text/html; charset=gbk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/jquery.js'?>'></script>
    <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.js'?>'></script>
    <script  language="javascript" type="text/javascript" src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>






    <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap-theme.css'?>' type="text/css" />
    <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.min.css'?>' type="text/css" />
    <link rel="stylesheet" href='<?php echo base_url().'res/css/bootstrap.css'?>' type="text/css" />





</head>
<body>
<div class="container">
    <div>
        <h1 class="page-header">北京协和医院挂号管理系统<small>--CWL挂号平台</small>
    </div>
    <div style="float:left">
        <div style="float:left; width:500px;height:400px" ><br/><h2>医院简介:</h2><br/><p>北京协和医院是一所位于北京市东城区，集医疗、科研、教学为一体的大型综合医院。它隶属于中国协和医科大学(2006年改为北京协和医学院/清华大学医学部)，是其的临床医学院，同时也是中国医学科学院的临床医学研究所，中华人民共和国卫生部指定的诊治疑难重症的技术指导中心之一。北京协和医院在中国乃至世界享有盛名。医院成立于1921年。现任院长赵玉沛。北京协和医院是中国最早承担外宾医疗任务的单位，医院专门设立外宾和高干门诊部，开设专门的高干、外宾、特需病区。2006年7月28日被中国奥委会定为“国家队运动员医疗服务指定医院”。</p></div>
        <div style="float: left; width:500px;height:400px"><img class="span6" width=500px src="<?php echo base_url().'res/images/yiyuan.png'?>" /></div>
    </div>
    <div style="float: left">
        <h3>用户管理列表</h3>
        <form class="form-search">请输入用户姓名：<input class="input-medium search-query" type="text"/><a class="btn btn-primary btn-sm" href="#">查询</a></form>
        <table class="table table-condensed table-bordered table-striped">
            <thead><tr><th>姓名</th><th>身份证号</th><th>电话</th><th>删除</th><th>修改</th></tr></thead>
            <tbody>
            <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
            <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
            <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>
            <tr><td>xxx</td><td>123456789123456789</td><td>11111111111</td><td><a class="btn btn-primary btn-xs" href="#">删除</a></td><td><a class="btn btn-primary btn-xs" href="#">修改</a></td></tr>

            </tbody>
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
</div>
</body>
</html>