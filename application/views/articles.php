<h1>Articles</h1>

<?php 
foreach($model->articlesData as $article) :
?>

<div><?php echo $article['category'];?></div>
<div><?php echo $article['user'];?></div>
<p><?php echo $article['article']; endforeach;?> </p>

