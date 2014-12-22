<?php $notice = $notice_item[0]; ?>
<link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
<div class="row" id="OneNoticePageContent">
	<div class="col-md-2 NoticeImgCol">
		<img src="<?php echo base_url().'res/images/NoticePage/NoticeMark.png'?>">
	</div>
	<div class="col-md-6 col-md-offset-1" id="NoticeInfoCol">
		<h2 style="background-color:#c8eaff;color:red;" class="row NoticeText backstyle-title" align="center" id="NoticeTitle">
			&nbsp;<?php echo $notice['Title']?>
		</h2>
		<div align="right" style="font-size:20px" class="row NoticeText NoticeTagText" id="NoticeSubInfo">
			<?php echo $notice['Date']?>
			&nbsp;&nbsp;&nbsp;发布人：
			<?php echo $notice['Name']?>
		</div>
		<div class="row NoticeText" style="background-color:#c8eaff" id="NoticeContent">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $notice['Content']?>
		</div>
	</div>
</div>