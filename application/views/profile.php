<?php 
    use core\Application;
    $this->title = 'Profile';

?>

<h1>Profile</h1>

<h2><?php echo 'Hello, '.Application::$app->user->getDisplayName().'! Let\'s Find Coffee';?></h2>

<h3>New Articles</h3>

<?php 
foreach($articles->articlesData as $article) :
?>

<div><?php echo $article['category'];?></div>
<div><?php echo $article['user'];?></div>
<p><?php   echo $article['article']; endforeach;?> </p>

<a href="articles">You can find more articles there</a>
<a href="write">Write your own article</a>