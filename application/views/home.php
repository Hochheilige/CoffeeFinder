<h1>Home page</h1>
<h3>
    <?php
        use core\Application;
        if (Application::isGuest()) {
            echo 'Let\'s Find Coffee';
        } else {
            echo 'Hello, '.Application::$app->user->getDisplayName().'! Let\'s Find Coffee';
        } 
    ?>
</h3>