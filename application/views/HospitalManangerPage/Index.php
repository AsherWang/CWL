<!DOCTYPE html>
<html>
  <head>
    <title>dingdan.html</title>
	
    <meta name="keywords" content="keyword1,keyword2,keyword3">
    <meta name="description" content="this is my page">
    <meta name="content-type" content="text/html; charset=gbk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>
      <script src='<?php echo base_url().'res/js/bootstrap-theme.js'?>'></script>
      <script src='<?php echo base_url().'res/css/bootstrap.min.css'?>'></script>
      <script src='<?php echo base_url().'/res/js/jquery.js'?>'></script>
      <script src='<?php echo base_url().'/res/css/bootstrap.css'?>'></script>



    <!-- <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/bootstrap.min.css'?>'>
	 <script src='<?php echo base_url().'/res/js/jquery.js'?>'></script>
     <script src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>  -->
   <!-- <link rel="stylesheet" type="text/css" href="./bootstrap.css">
    <script src="./jquery-1.11.1.min.js"></script>
     <script src="./jquery.js"></script>
     <script src="./bootstrap.min.js"></script>
     <script src="./bootstrap.min.css"></script>
     <script src="./bootstrap-theme.js"></script>  -->
  </head>
  
  <body>
  <div class="container">
   <div>
   <h1 class="page-header">北京协和医院挂号管理系统<small>--CWL挂号平台</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="#login" data-toggle="modal" class="btn btn-primary btn-sm">点击登陆</a>
   </h1></div>
   
  <div class="modal" id="login" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header"><a href="#" class="close" data-dismiss="modal">×</a><h4>用户登录</h4></div>
  <div class="modal-body">
  <form class="form-horizontal">
     <div class="control-group">
      <label class="control-group">用户名</label>
      <div class="controls"><input type="text"></div>
      </div>
       <div class="control-group">
      <label class="control-group">密码</label>
      <div class="controls"><input type="text"></div>
      </div>
   </form>
  </div>
  <div class="modal-footer"><button type="submit" class="btn btn-primary">登录</button></div>
  </div>
  </div>
  </div>
   <div style="float: left">
   <div style="float: left; width: 600px;height: 400px" ><br/><h2>医院简介:</h2><br/><p>北京协和医院是一所位于北京市东城区，集医疗、科研、教学为一体的大型综合医院。它隶属于中国协和医科大学(2006年改为北京协和医学院/清华大学医学部)，是其的临床医学院，同时也是中国医学科学院的临床医学研究所，中华人民共和国卫生部指定的诊治疑难重症的技术指导中心之一。北京协和医院在中国乃至世界享有盛名。医院成立于1921年。现任院长赵玉沛。北京协和医院是中国最早承担外宾医疗任务的单位，医院专门设立外宾和高干门诊部，开设专门的高干、外宾、特需病区。2006年7月28日被中国奥委会定为“国家队运动员医疗服务指定医院”。</p></div>
   <div style="float: left; width=600px;height: 400px"><img class="span6" width=500px src="<?php echo base_url().'res/images/yiyuan.png'?>" /></div>
   </div>

   <div>

   </div>
  
   <div class="tabbable">
   <ul class="nav nav-tabs">
       <li class="active"><a href="#tab1" data-toggle="tab" >挂号信息</a></li>
       <li><a href="#tab2" data-toggle="tab" >出诊信息</a></li>
       <li><a href="#tab3" data-toggle="tab" >号源信息</a></li>  
       <li><a href="#tab4" data-toggle="tab" >公告管理</a></li>  
   </ul>
   
   <div class="tab-content">
   <div class="tab-pane active" id="tab1" >
   <h3>挂号患者列表</h3>
   <form class="form-search">请输入患者姓名：<input class="input-medium search-query" type="text"/><a class="btn btn-primary btn-sm" href="#">查询</a></form>
   <table class="table table-condensed table-bordered table-striped">
   <thead><tr><th>姓名</th><th>年龄</th><th>电话</th><th>挂号诊室</th><th>挂号医生</th><th>预约时间</th><th>是否就诊</th></tr></thead>
   <tbody>
   <tr><td>xx</td><td>12</td><td>132456</td><td>内科</td><td>xxx</td><td>xxxx/xx/xx</td><td><a class="btn btn-primary btn-xs" href="#">已就诊，进入挂号订单</a></td></tr>
   <tr><td>xx</td><td>12</td><td>132456</td><td>内科</td><td>xxx</td><td>xxxx/xx/xx</td><td><a class="btn btn-primary btn-xs" href="#">已就诊，进入挂号订单</a></td></tr>
   <tr><td>xx</td><td>12</td><td>132456</td><td>内科</td><td>xxx</td><td>xxxx/xx/xx</td><td><a class="btn btn-primary btn-xs" href="#">已就诊，进入挂号订单</a></td></tr>
   <tr><td>xx</td><td>12</td><td>132456</td><td>内科</td><td>xxx</td><td>xxxx/xx/xx</td><td><a class="btn btn-primary btn-xs" href="#">已就诊，进入挂号订单</a></td></tr>
   <tr><td>xx</td><td>12</td><td>132456</td><td>内科</td><td>xxx</td><td>xxxx/xx/xx</td><td><a class="btn btn-primary btn-xs" href="#">已就诊，进入挂号订单</a></td></tr>
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

   <div class="tab-pane" id="tab4">
    <h3>公告管理</h3>
   <table style="text-align:center"  class="table table-condensed table-bordered table-striped">
   <thead><tr><th  style="text-align:center" colspan="3">公告管理</th><th  style="text-align:center"><a class="btn btn-primary btn-xs" href="#">添加公告</a></th></tr></thead>
   <tbody>
   <tr><td>公告1</td><td> **************</td><td><a class="btn btn-primary btn-xs" href="#">公告修改</a></td><td><a class="btn btn-primary btn-xs" href="#">公告删除</a></td></tr>
    <tr><td>公告2</td><td> **************</td><td><a class="btn btn-primary btn-xs" href="#">公告修改</a></td><td><a class="btn btn-primary btn-xs" href="#">公告删除</a></td></tr>
	 <tr><td>公告3</td><td> **************</td><td><a class="btn btn-primary btn-xs" href="#">公告修改</a></td><td><a class="btn btn-primary btn-xs" href="#">公告删除</a></td></tr>
	  <tr><td>公告4</td><td> **************</td><td><a class="btn btn-primary btn-xs" href="#">公告修改</a></td><td><a class="btn btn-primary btn-xs" href="#">公告删除</a></td></tr>
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
   
   
   <div class="tab-pane" id="tab2" >
   <h3>出诊信息</h3>
    <form class="form-search">请输入医生姓名：<input class="input-medium search-query" type="text"/><a class="btn btn-primary btn-sm" href="#">查询</a></form>
    <table class="table table-condensed table-bordered table-striped">
    <thead><tr><th>姓名</th><th>年龄</th><th>所在科室</th><th>每周出诊</th><th>坐班时间</th><th>修改信息</th></tr></thead>
    <tr><td>xx</td><td>33</td><td>内科</td><td>每周一，二，三</td><td>9:00-12:00</td><td><a class="btn btn-primary btn-xs" href="#">点击修改</a></td></tr>
    <tr><td>xx</td><td>33</td><td>内科</td><td>每周一，二，三</td><td>9:00-12:00</td><td><a class="btn btn-primary btn-xs" href="#">点击修改</a></td></tr>
    <tr><td>xx</td><td>33</td><td>内科</td><td>每周一，二，三</td><td>9:00-12:00</td><td><a class="btn btn-primary btn-xs" href="#">点击修改</a></td></tr>
    <tr><td>xx</td><td>33</td><td>内科</td><td>每周一，二，三</td><td>9:00-12:00</td><td><a class="btn btn-primary btn-xs" href="#">点击修改</a></td></tr>
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
   <div class="tab-pane" id="tab3" >
   <h3>号源管理</h3>
   <table class="table table-condensed table-bordered table-striped">
   <thead><tr><th>科室</th><th>号源剩余</th><th>已预约挂号数</th><th>号源调整</th></tr></thead>
   <tr><td>xx</td><td>12</td><td>12</td><td><a class="btn btn-primary btn-xs" href="#">增加</a><a class="btn btn-primary btn-xs" href="#">减少</a></td></tr>
   <tr><td>xx</td><td>12</td><td>12</td><td><a class="btn btn-primary btn-xs" href="#">增加</a><a class="btn btn-primary btn-xs" href="#">减少</a></td></tr>
   <tr><td>xx</td><td>12</td><td>12</td><td><a class="btn btn-primary btn-xs" href="#">增加</a><a class="btn btn-primary btn-xs" href="#">减少</a></td></tr>
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
   </div>
   
  
  </div>
  
   
  </body>
</html>
