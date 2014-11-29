
<a href="http://localhost:8080/CodeIgniter_2.2.0/index.php/news/create">添加新闻</a>
<table><thead><th>标题</th><th>内容</th><th>链接</th></thead><tbody>
<?php foreach ($news as $news_item): ?><tr>
    <td><?php echo $news_item['title'] ?></td>
    <td> <?php echo $news_item['text'] ?></td>
    <td><a href="http://localhost:8080/CodeIgniter_2.2.0/index.php/news/<?php echo $news_item['slug'] ?>">View article</a></td>
</tr>
<?php endforeach ?></tbody></table>