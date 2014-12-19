<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/Login.css'?>'>
    <script src='<?php echo base_url().'/res/js/Login.js'?>'></script>

</head>
<body>
    <div style="width:100%;height:100%;margin-left:-8px; margin-top:-8px; position:absolute; ">
        <img style="position:absolute;left:0px;top:0px;width:100%;height:100%;z-Index:-1;" src="<?php echo base_url().'res/images/loginback.jpg'?>" />
    </div>
    
    <form id="form1" method=post>
    
        <div style="position:absolute;width:394px;height:297px;top:20%;left:500px;background: url('<?php echo base_url().'res/images/RegUser.png'?>')">
            <label style="position:absolute;top:10px;left:114px;font-family: Arial;font-size:42px">L&nbspo&nbspg&nbspi&nbspn</label>
            <label style="position:absolute;top:75px;left:3px;font-family: '华文隶书';font-size:21px">身份证号</label>
                <input style="position:absolute;top:73px;left:133px;" name="ID" type="text" class="frame" maxlength="20"/>
            <label style="position:absolute;top:122px;left:3px;font-family: '华文隶书';font-size:21px">密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp码</label>
                <input style="position:absolute;top:119px;left:133px;" name="password" type="password" class="frame" maxlength="20"/>
            <label style="position:absolute;top:169px;left:3px;font-family: '华文隶书';font-size:21px">客户类型</label>
                <input style="position:absolute;top:160px;left:124px;" type="radio" value="3" name="choose" checked>
                    <label style="position:absolute;top:160px;left:164px;font-family: '华文隶书';font-size:18px">院方挂号处</label>
                <input style="position:absolute;top:180px;left:124px;" type="radio" value="2" name="choose">
                    <label style="position:absolute;top:180px;left:164px;font-family: '华文隶书';font-size:18px">院方管理员</label>
                <input style="position:absolute;top:200px;left:124px;" type="radio" value="1" name="choose">
                    <label style="position:absolute;top:200px;left:164px;font-family: '华文隶书';font-size:18px">超级管理员</label>
            <input type="submit" value="登录→" style="position:absolute;top:163px;left:284px;color:red;" class="Login"/>
          <?php if($error!=""){ ?>> 
           <p  style="position:absolute;top:223px;left:54px;color:red;"><?php echo $error;?></p>
		   <?php } ?>
        </div>
    </form>
</body>
</html>