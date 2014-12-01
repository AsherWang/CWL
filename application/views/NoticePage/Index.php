<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 10:18:24
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 10:19:51
 */
function PagesFunctions()
{
    return "<div style='border:1px solid #00f'>".
            date('l dS \of F Y h:i:s A').
            "<br>Hi~this ia the NoticePage of our system".
            "公告页面要实现的功能:<br>".
            "1.基本的跳转链接(到其他页面)<br>".
            "2.最近公告的列表<br>".
            "3.根据用户类型不同开放不同功能<br>".
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
    </body>
</html>
