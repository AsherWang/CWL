<meta charset="utf-8">
<?php foreach ($notice as $notice_item): ?>

    <h3><?php echo $notice_item['Title'] ?></h3>
    <div id="main">
        <?php echo $notice_item['Content'] ?>
        <?php echo $notice_item['Date']?>
    </div>
    <p><a href="http://[你的域名]/index.php/news/">查看公告</a></p>

<?php endforeach ?>
