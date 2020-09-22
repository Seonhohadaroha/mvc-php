<h1><?php echo $data['title']; ?></h1>

<ul>
  <?php foreach( $data['articles'] as $article ): ?>
    <li><?php echo $article->title; ?></li>
  <?php endforeach; ?>
</ul>