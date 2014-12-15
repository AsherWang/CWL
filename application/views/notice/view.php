<meta charset="utf-8">
<?php foreach ($notice_item as $notice): ?>

    <h3><?php echo $notice['Title'] ?></h3>
    <div id="main">
        <?php echo $notice['Content'] ?>
        <?php echo $notice['Date']?>
    </div>
<?php endforeach ?>
