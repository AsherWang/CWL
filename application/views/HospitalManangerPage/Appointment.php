<!DOCTYPE html>
<html>
  <head>
    <title>Appointment.html</title>
      <script src='<?php echo base_url().'res/js/bootstrap.min.js'?>'></script>
      <script src='<?php echo base_url().'res/js/bootstrap-theme.js'?>'></script>
      <script src='<?php echo base_url().'res/css/bootstrap.min.css'?>'></script>
      <script src='<?php echo base_url().'/res/js/jquery.js'?>'></script>
      <script src='<?php echo base_url().'/res/css/bootstrap.css'?>'></script>
    <meta name="keywords" content="keyword1,keyword2,keyword3">
    <meta name="description" content="this is my page">
    <meta name="content-type" content="text/html; charset=gbk">






    
    <!--<link rel="stylesheet" type="text/css" href="./styles.css">-->

  </head>
  
  <body>
    <div class="container">
    <div>
     <h1 class="page-header">北京协和医院挂号单</h1>
     <table  class="table table-condensed table-bordered table-striped">
   <thead><tr><th colspan="3" style="text-align:center">北京协和医院挂号单</th></tr></thead>
   <tbody>
   <tr><td>姓　　名：<input type="text" id="name"></td><td>年　　龄：<input type="text" id="age"></td><td>电　　话：<input type="text" id="phone"></td></tr>
   <tr><td>预约医生：<input type="text" id="doctor"></td><td colspan="2">挂号诊室：<input style="width: 600px" type="text" id="examroom"></td></tr>
   <tr><td colspan="3">患者病史:<input style="width:1000px; text-align:left" type="text" id="disease"></td></tr>
   <tr><td>挂号费：3.00</td><td>病历本：1.00</td><td>合计：4.00</td></tr>
   <tr><td colspan="2">身份证号：<input  style="width:600px" type="text" id="idnum"></td><td>就诊日期：<input type="text" id="date"></td></tr>
   </tbody>
   </table>
    </div>
    </div>
  </body>
</html>
