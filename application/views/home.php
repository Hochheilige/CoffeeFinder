<h1>Home page</h1>
<!-- <h3>
    <?php
        use core\Application;
        if (Application::isGuest()) {
            echo 'Let\'s Find Coffee';
        } else {
            echo 'Hello, '.Application::$app->user->getDisplayName().'! Let\'s Find Coffee';
        } 
    ?>
</h3> -->

<h3>Быстрый поиск</h3>
<?php $form = core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'cafename') ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php core\form\Form::end() ?>

<h3>Статьи</h3>
<?php 
    foreach($articles->articlesData as $article) :
?>

<div><?php echo $article['category'];?></div>
<div><?php echo $article['user'];?></div>
<p><?php echo $article['article']; endforeach;?> </p>

<a href="articles">You can find more articles there</a>