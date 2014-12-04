<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" type="text/css" href='<?=base_url().'res/css/RegUser.css'?>'>
    <script src='<?=base_url().'res/css/RegUser.js'?>'> </script>
    <script src='<?=base_url().'res/css/RegUser.js'?>'> </script>

</head>
<body>
    <div style="position:absolute;width:394px;height:250px;top:30%;left:30%;background: url('<?=base_url().'res/images/RegUser.png'?>')">
        <label style="position:absolute;top:10px;left:114px;font-family: Arial;font-size:42px">L&nbspo&nbspg&nbspi&nbspn</label>
        <label style="position:absolute;top:75px;left:3px;font-family: '华文隶书';font-size:21px">身份证号</label>
        <input style="position:absolute;top:73px;left:133px;" type="text" class="frame" maxlength="20">
        <label style="position:absolute;top:122px;left:3px;font-family: '华文隶书';font-size:21px">密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp码</label>
        <input style="position:absolute;top:119px;left:133px;" type="password" class="frame" maxlength="20">
        <label style="position:absolute;top:169px;left:3px;font-family: '华文隶书';font-size:21px">验&nbsp&nbsp证&nbsp&nbsp码</label>
        <input style="position:absolute;top:166px;left:133px;" type="text" class="frame" maxlength="4">
        <button style="position:absolute;top:160px;left:280px;color:red;" class="Login">登录→</button>
        <button style="position:absolute;top:217px;left:30px;" class="Other">忘记密码</button>
        <button style="position:absolute;top:217px;left:180px;" class="Other">用户注册</button>
    </div>
</body>
</html>