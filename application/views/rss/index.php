<?php
//views/rss/index.php
?>
<h2><?php echo $title ?></h2>

<?php foreach ($rss as $rsss_item): ?>

        <h3><?php echo $rss_item['title'] ?></h3>
        <div class="main">
                <?php echo $rss_item['text'] ?>
        </div>
        <p><a href="<?php echo $rss_item['slug'] ?>">View News</a></p>
        

<?php endforeach ?>