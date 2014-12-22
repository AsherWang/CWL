<?php $notice = $notice_item[0]; ?>
<link href='<?php echo base_url().'/res/css/Notice.css'?>' rel="stylesheet" type="text/css" />
<div class="row" id="OneNoticePageContent">
	<div class="col-md-2 NoticeImgCol">
		<img src="<?php echo base_url().'res/images/NoticePage/NoticeMark.png'?>">
	</div>
	<div class="col-md-6 col-md-offset-1" id="NoticeInfoCol">
		<h2 class="row NoticeText" id="NoticeTitle">
			<?php echo $notice['Title']?>
		</h2>
		<div class="row NoticeText NoticeTagText" id="NoticeSubInfo">
			<?php echo $notice['Date']?>
			&nbsp;&nbsp;&nbsp;发布人：
			<?php echo $notice['Name']?>
		</div>
		<div class="row NoticeText" id="NoticeContent">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $notice['Content']?>
		</div>
	</div>
</div>