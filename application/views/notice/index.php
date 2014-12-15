<meta charset="utf-8">
<div class="listbox">
		<?php foreach ($notice as $notice_item): ?>
			<dl>
				<dd><a target="_blank" href="http://localhost:8080/CWL/index.php/notice/<?php echo $notice_item['ID']?>"><?php echo $notice_item['Title'] ?></a>></dd>
				<dt><?php echo $notice_item['Date'] ?></dt>
			</dl>
		<?php endforeach ?>
</div>

