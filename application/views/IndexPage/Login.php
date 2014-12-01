<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 10:01:54
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:38:30
 */
function PagesFunctions()
{
    return "<div style='border:1px solid #00f'>".
            date('l dS \of F Y h:i:s A').
            "<br>Hi~this ia the loginPage of our system".
            "<br>页面要实现的功能:<br>".
            "1.各种登陆<br>".
            "2.其他信息（看情况）<br>".
            "3.感觉把挂号用户登陆和其他啊人的登陆分开或者用js做个登陆页切换更好点，具体细节看前端的孩纸们了<br>".
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
     <a href="../HospitalManangerPage">到院方管理页面</a><br>
     <a href="../RegOfficePage">到院方挂号处页面</a><br>
     <a href="../RegUserPage">到挂号用户页面</a><br>
     <a href="../SuperManagerPage">到第三方管理员(超级管理员)页面</a><br>
    </div>

    </body>
</html>


