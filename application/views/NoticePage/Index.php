<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href='<?php echo base_url().'res/css/bootstrap.min.css'?>'>
    <link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
    <script src='<?php echo base_url().'/res/js/Notice.js'?>'></script>
    <title></title>
</head>
<body>
    <div class="row">
        <div class="col-md-3" id="NoticeHeadImgCol">
            <img class="" id = "NoticeHeadImg" src= "<?php echo base_url().'res/images/NoticePage/NoticeMark.png'?>">
        </div>
        <div class="col-md-8" id="NoticeListCol">
            <div class="row" id="NoticeList">
                <?php foreach ($notice as $notice_item): ?>
                    <div class="row">
                        <a class="NoticeTitle col-md-4" style="float:left"  href="http://localhost:8080/CWL/NoticePage/view/1"><?php echo $notice_item['Title'] ?></a>
                        <p class="NoticeDate col-md-3 col-md-offset-3"><?php echo $notice_item['Date']?></p>
                        <p class="NoticeAuthor col-md-2"><?php echo $notice_item['Name']?></p>
                    </div>
                    <hr />
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>
</html>
