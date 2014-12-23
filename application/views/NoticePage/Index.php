<?php session_start(); ?>
<link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
<script src='<?php echo base_url().'/res/js/Notice.js'?>'></script>
<script>
function createNotice()
{
    showModalDialog("b.html", "dialogWidth=500px;dialogHeight=500px;status=no;help=no;scrollbars=no");
}
</script>
<div class="row">
    <div class="col-md-3" id="NoticeHeadImgCol">
        <img id = "NoticeHeadImg" src= "<?php echo base_url().'res/images/NoticePage/NoticeMark.png'?>">
    </div>
    <div class="col-md-8" id="NoticeListCol">
        <div class="row" id="NoticeList">
            <div class="row">
                <div class="NoticeTagText col-md-4">标题</div>
                <div class="NoticeTagText col-md-2 col-md-offset-1">发布时间</div>
                <div class="NoticeTagText col-md-2 col-md-offset-1" align="center">作者</div>
            </div>
            <hr style="margin-top:3px"/>
            <?php foreach ($notice as $notice_item): ?>
                <div class="row" style="margin-top:20px">
                    <a class="NoticeListTitle col-md-4" style="float:left;"  href="http://localhost:8080/CWL/NoticePage/view/<?php echo $notice_item['ID'] ?>">
                    <?php
                    $v=$notice_item['Title'];
                    mb_internal_encoding('utf-8');
                    if(mb_strlen($v)>12)
                        echo mb_substr($v,0,12).'...';
                    else
                        echo $v;
                    ?></a>
                    <p class="NoticeListDate col-md-3 col-md-offset-1"><?php echo $notice_item['Date']?></p>
                    <p class="NoticeListAuthor col-md-2" align="center"><?php echo $notice_item['Name']?></p>
                </div>
                <hr />
            <?php endforeach ?>
        </div>
    </div>
</div>
