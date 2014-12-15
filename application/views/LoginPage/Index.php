<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/Login.css'?>'>
    <script src='<?php echo base_url().'/res/js/Login.js'?>'></script>

</head>
<body>
    <form action="getactionURL()">
            <input style="position:absolute;top:50px;left:200px;" type="radio" value="1" name="choose" checked>
            <input style="position:absolute;top:50px;left:500px;" type="radio" value="2" name="choose">
            <input style="position:absolute;top:50px;left:800px;" type="radio" value="3" name="choose">
        <div style="position:absolute;width:394px;height:250px;top:30%;left:30%;background: url('<?php echo base_url().'res/images/RegUser.png'?>')">
            <label style="position:absolute;top:10px;left:114px;font-family: Arial;font-size:42px">L&nbspo&nbspg&nbspi&nbspn</label>
            <label style="position:absolute;top:75px;left:3px;font-family: '华文隶书';font-size:21px">身份证号</label>
            <input style="position:absolute;top:73px;left:133px;" name="ID" type="text" class="frame" maxlength="20"/>
            <label style="position:absolute;top:122px;left:3px;font-family: '华文隶书';font-size:21px">密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp码</label>
            <input style="position:absolute;top:119px;left:133px;" name="password" type="password" class="frame" maxlength="20"/>
            <label style="position:absolute;top:169px;left:3px;font-family: '华文隶书';font-size:21px">验&nbsp&nbsp证&nbsp&nbsp码</label>
            <input style="position:absolute;top:166px;left:133px;" type="text" class="frame" maxlength="4"/>
            <input style="position:absolute;top:188px;left:133px;" type="text" class="frame" value="DcSW" disabled="disabled" />
            <button style="position:absolute;top:219px;left:32px;" class="Other">忘记密码</button>
            <button style="position:absolute;top:219px;left:182px;" class="Other">用户注册</button>
            <input type="submit" value="登录→" style="position:absolute;top:162px;left:282px;color:red;" class="Login" />
        </div>
    </form>
</body>
</html>