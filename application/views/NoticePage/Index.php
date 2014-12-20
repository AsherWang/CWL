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
        <img class="" id = "NoticeHeadImg" src= "<?php echo base_url().'res/images/NoticePage/NoticeMark.png'?>">
    </div>
    <div class="col-md-8" id="NoticeListCol">
        <div class="row" id="NoticeList">
            <div class="row">
                <div class="NoticeTagText col-md-1">标题</div>
                <div class="NoticeTagText col-md-2 col-md-offset-6">发布时间</div>
                <div class="NoticeTagText col-md-1 col-md-offset-1">作者</div>
            </div>
            <hr style="margin-top:3px"/>
            <?php foreach ($notice as $notice_item): ?>
                <div class="row" style="margin-top:20px">
                    <a class="NoticeListTitle col-md-4" style="float:left;"  href="http://localhost:8080/CWL/NoticePage/view/<?php echo $notice_item['ID'] ?>">
                    <?php
                    $v=$notice_item['Title'];  //以$v代表‘长描述’
                    mb_internal_encoding('utf-8');//以GBK编码的页面为例
                    if(mb_strlen($v)>12) //如果内容多余100字
                        echo mb_substr($v,0,12).'...'; //限制100个字的输出，加上省略号
                    else //如果不够100字
                        echo $v;
                    ?></a>
                    <p class="NoticeListDate col-md-3 col-md-offset-3"><?php echo $notice_item['Date']?></p>
                    <p class="NoticeListAuthor col-md-2"><?php echo $notice_item['Name']?></p>
                </div>
                <hr />
            <?php endforeach ?>
            <?php if($this->session->userdata('user_type') == "1"){ ?>
                <div id="CreateNewNoticeDiv" class="row">
                    <button id="CreateNewNoticeBtn" type="button" class="btn btn-default col-md-2 col-md-offset-7" value="发布公告" data-toggle="modal" data-target="#myModal">发布公告</button>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">发布新的公告</h4>
                            </div>
                            <div class="modal-body">
                                <p>公告标题：</p>
                                <input type="text" class="form-control" id="CreateNoticeTitle">
                                <p>公告内容: </p>
                                <textarea id="CreateNoticeContentTextarea"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">确认发布</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php }?>
        </div>
    </div>
</div>
