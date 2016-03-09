<?php foreach ($news as $news_item): ?>
  <h3><?php echo $news_item['title']; ?></h3>
  <div class="main">
    <p><?php echo $news_item['text']; ?></p>
  </div>
  <p>
    <a href="<?php echo site_url('news/' . $news_item['slug']); ?>">
      View article
    </a>
  </p>
<?php endforeach; ?>
