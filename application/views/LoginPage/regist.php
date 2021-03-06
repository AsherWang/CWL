<html>
<head>
 <title>全国统一预约平台-注册</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

 <link rel="stylesheet" type="text/css" href='<?php echo base_url().'/res/css/bootstrap.min.css'?>'>
 <link href='<?php echo base_url().'/res/css/regist.css'?>' rel="stylesheet" type="text/css" />
 <script src='<?php echo base_url().'/res/js/jquery.js'?>'></script>
 <script src='<?php echo base_url().'/res/js/bootstrap.min.js'?>'></script>
</head>

<body>
   <div id="header">
   <nav class="navbar navbar-inverse" role="navigation" id="logo">
   
     <div class="navbar-header">
       <a class="navbar-brand" href="">CWL全国统一预约平台</a>
     </div>
     
     <div>
       <ul class="nav navbar-nav">
         <li><a href="<?php echo base_url();?>">首页</a></li>
         <li><a href="<?php echo base_url();?>RegUserPage">预约挂号</a></li>
         <li><a href="NoticePage">查看公告</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right" id="logo1">
        
        <li class="active"><a>注册后才可以预约哦！</a></li>
      </ul>
     
   </div>
 </nav>

</div>
  
   <div id="maincontainer">
        <form role="form" onSubmit="return check_regist()" action="" method="post" class="form-control form-horizontal" id="regist-form">
            <div class="form-group">
                <label for="userid" class="col-md-3 control-label">身份证号</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="userid" placeholder="旧15位或新18位字符" name="id_number"></div>

            </div>

            <div class="form-group">
                <label for="truename" class="col-md-3 control-label">真实姓名</label>
                <div class="col-md-8">
                    <input name="name" type="text" class="form-control" id="truename" placeholder="请输入与身份证相一致的名字"></div>
            </div>
            
            <div class="form-group">
                <label for="password" class="col-md-3 control-label">密码</label>
                <div class="col-md-8">

                    <input type="password" name="password" class="form-control" id="password" placeholder="密码长度为6到16个字符"></div>

            </div>
            <div class="form-group">
                <label for="password1" class="col-md-3 control-label">密码确认</label>
                <div class="col-md-8">
                    <input name="password1" type="password" class="form-control" id="password1" placeholder="再次输入密码"></div>
            </div>

            <div class="form-group">
                <label for="phonenumber" class="col-md-3 control-label">手机号</label>
                <div class="col-md-8">

                    <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="不支持170号段"></div>

            </div>
            <div class="col-md-offset-2" id="agree1">
              <input id="agree" type="checkbox" />
              <label>我已同意</label>
              <a href="#" target="_blank" style="text-decoration:none">《CWL预约中心用户注册协议》</a>
            </div>

            <div class="form-group">

                <div class="col-md-4 col-md-offset-4">
                    <button type="submit"  class="btn btn-danger btn-lg btn-block" id="registbut">注册并登录</button>
                </div>
            </div>
            
            <?php if($reg_result==2){ ?>
            <div id="hint"><label id="hintinfo">用户名已存在</label></div>
            <?php } elseif($reg_result==3){ ?>
            <div id="hint"><label id="hintinfo">未知错误</label></div>
            <?php } else{ ?>
            <div id="hint"><label id="hintinfo"></label></div>

            <?php } ?>


        </form>
        <script type="text/javascript">
            $(document).ready(function() {
              $("#userid").blur(function(){
                var idcard=$("#userid").val();
                
                var bo=/^(\d{6})(18|19|20)?(\d{2})([01]\d)([0123]\d)(\d{3})(\d|X)?$/.test(idcard);
                var year = idcard. substr(6,4);
                var month = idcard. substr(10,2);
                var day = idcard. substr(12,2);
                if(bo==false||month>12||day>31){
                  
                  $("#userid").val('');
                  $("#hintinfo").text('身份证号格式错误,请重新输入');
                 
                  return false;
                }
                else{
                  $("#hintinfo").text('');
                }
              }); 
              $("#password1").blur(function(){
                var pas=$("#password").val();
                var pas1=$("#password1").val();
                if(pas1!=pas||pas1==''||pas==''){
                  
                  $("#password").val('');
                  $("#password1").val('');
                  $("#hintinfo").text('两次密码不一致，请重新输入');
                 
                  return false;
                }
                else{
                  $("#hintinfo").text('');
                }
              });
              $("#truename").blur(function(){
                var tname=$("#truename").val();
                var tnamelen=tname.length;
                if(tnamelen>10){
                  
                  $("#truename").val('');
                  
                  $("#hintinfo").text('姓名长度不符，请重新输入');
                 
                  return false;
                }
                else{
                  $("#hintinfo").text('');
                }
                  
              }); 
              $("#phonenumber").blur(function(){
                var phone=$("#phonenumber").val();
                var phonelen=phone.length;
                if(phonelen!=11){
                  
                  $("#phonenumber").val('');
                  
                  $("#hintinfo").text('手机号格式错误，请重新输入');
                 
                  return false;
                }
                else{
                  $("#hintinfo").text('');
                }
              });
            })
            function check_regist(){
              var inp1=$("#userid").val();
              var inp2=$("#truename").val();
              var inp3=$("#password").val();
              var inp4=$("#password1").val();
              var inp5=$("#phonenumber").val();

                if (inp1==''||inp2==''||inp3==''||inp4==''||inp5=='') {
                  $("#hintinfo").text('不能为空，请输入未填信息');
                  return false;
              };
                
                  return true;
              }
        </script>

    </div>
     


</body>
</html>