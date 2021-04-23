<?php 
    $this->title = 'Статьи';
?>

<h1>Статьи</h1>

<?php 
foreach($model->articlesData as $article) :
?>

<figure>
  <blockquote class="blockquote">
    <h3><?php echo $article['category'];?></h3>
  </blockquote>
  <figcaption class="blockquote-footer">
   <?php echo $article['user'];?>
  </figcaption>
</figure>
<p class ="main_text"><?php echo $article['article']; endforeach;?> </p>

