<?php 
    use core\Application;
    $this->title = 'Профиль';

?>

<h1>Профиль</h1>

<h2><?php echo 'Привет, '.Application::$app->user->getDisplayName().'! Давай искать кофейню!';?></h2>

<br><br>
<h2>Новые статьи</h2>

<?php 
    foreach($articles->articlesData as $article) :
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

<div class="alert alert-success" role="alert">
    <div class="row">
        <div class="col">
            <a href="articles" class="alert-link text-light">Вы можете найти новые статьи здесь</a>
        </div>
        <div class="col">
            <a href="write" class="alert-link text-light">Напишите свою статью</a>
        </div>
    </div>
    
   
</div>
