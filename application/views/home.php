<?php 
    use core\Application;
    $this->title = 'Главная';

?>
<br>
<h1>Главная</h1>
<!-- <h3>
    <?php
        if (Application::isGuest()) {
            echo 'Let\'s Find Coffee';
        } else {
            echo 'Hello, '.Application::$app->user->getDisplayName().'! Let\'s Find Coffee';
        } 
    ?>
</h3> -->

<div class = "section cover" id = "cover">
    <div class="row align-items-start">                
        <div class="col">
             <div class="logo_gif" >
                 <img src="/CoffeeFinder/application/vendor/images/logo_gif.gif" alt="" width="400" height="400">
             </div>
             <div class="h2">
                  Найди кофейню себе по вкусу.                  
              </div>
             <div class="h2"> </div>
             <div class="h2">
                 В вечной погоне за временем иногда так хочется остановиться и выпить чашечку ароматного кофе.
             </div>   
             <div class="h2">
                 Вместе с нами Вы найдете лучший островок спокойствия в вечной городской суете.
             </div>  
         </div>                
    </div>  
    
</div>

<br><br><br>
<p class ="main_text"></p>
<h2>Быстрый поиск</h2>
<?php $form = core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'cafename') ?>
    <br>
    <button class="w-100 btn btn-lg btn-outline-success" type="submit">Найти</button>
    <br><br>
<?php core\form\Form::end() ?>

<p class ="main_text"></p>
<h2>Статьи</h2>
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

<div class="alert" role="alert">
    <a href="articles" class="alert-link text-light">Вы можете найти новые статьи здесь</a>.
</div>