<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:54:25
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 10:23:21
 */
//这里将是首页的位置了
function PagesFunctions()
{
    return "<div style='border:1px solid #00f'>".
            date('l dS \of F Y h:i:s A').
            "<br>Hi~this ia the homepage of our system".
            "页面要实现的功能:<br>".
            "1.基本的跳转链接(到其他页面)<br>".
            "2.最近公告的显示<br>".
            "3.想起来再说<br>".
            "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
    <?php
         echo PagesFunctions();
    ?>
    <br>
    <div  style='border:1px solid #f00'>
    测试用链接<br>
    <a href="IndexPage/Login">到登陆页面</a><br>
    <a href="NoticePage">到公告页面</a>
    </div>
    </body>
</html>
