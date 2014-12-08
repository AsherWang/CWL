<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
    <script src='<?php echo base_url().'/res/js/Notice.js'?>'></script>
    <title></title>
</head>
<body>
    <div id="notice_choice">
        <input class="button1" type="button" value="发布公告" onclick="publish()"/>
        <input class="button1" type="button" value="预约挂号"/>
        <input class="button1" type="button" value="返回首页"/>
    </div>
    <div class="div_out_css" id="new_notice">
        <div class="div_notice_css">
            <label>最</label><br>
            <label>新</label><br>
            <label>公</label><br>
            <label>告</label><br>
        </div>
        <div class="div_in_css" style="visibility: hidden" id="docu">
            <textarea class="notice_title_css" id="title" disabled="disabled"></textarea>
            <hr style="position:absolute;top:22px;width:640px;border:1px dashed #87cefa;">
            <textarea class="notice_css" id="concrete" disabled="disabled"></textarea>
            <input type="button" class="back_css" value="返回公告" onclick="back()"/>
        </div>
        <div class="div_in_css" id="notice">
            <a class="survey" onclick="surveyclick()">北医一院</a>
            <hr style="border:1px dashed #87cefa">
            <a class="survey" onclick="surveyclick()" >北医二院</a>
            <hr style="border:1px dashed #87cefa">
            <a class="survey" onclick="surveyclick()">北医三院</a>
            <hr style="border:1px dashed #87cefa">
            <a class="survey" onclick="surveyclick()">北医四院</a>
            <hr style="border:1px dashed #87cefa">
            <a class="survey" onclick="surveyclick()">北医五院</a>
            <hr style="border:1px dashed #87cefa">
            <a class="survey" onclick="surveyclick()">北医六院</a>
            <hr style="border:1px dashed #87cefa">
        </div>

    </div>
    <div class="div_publish" id="publish_notice">
        <form>
            标题
            <input type="text" name="notice_title"/><br>
            内容
            <textarea name="notice_docu"></textarea>
            <input type="button" value="返回"/>
            <input type="submit"/>
        </form>
    </div>
</body>
</html>