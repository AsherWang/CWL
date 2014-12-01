<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:54:25
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:50:52
 */
//这里将是首页的位置了
function PagesFunctions()
{
    date_default_timezone_set('Asia/Shanghai'); 
    return "<div style='border:1px solid #00f'>".
            date('l dS \of F Y h:i:s A').
            "<br>Hi~this ia the HospitalManangerPage of our system".
            "<br>页面要实现的功能:<br>".
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
    </body>
</html>
