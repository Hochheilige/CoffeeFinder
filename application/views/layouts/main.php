<?php

use Core\Application;
?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Bootstrap CSS -->
         <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <link href="/CoffeeFinder/application/vendor/styles/main_style.css?<?rand()?>" rel="stylesheet"/>
        <link rel="stylesheet" href="/CoffeeFinder/application/vendor/styles/login_style.css"/>
        <link rel="stylesheet" href="/CoffeeFinder/application/vendor/styles/registration_style.css.css?<?rand()?>" />
        <title><?php echo $this->title ?></title>
    <head>  

    <body class="d-flex flex-column h-100">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/CoffeeFinder/application/vendor/images/logo.png" alt="" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="findCafe">Поиск</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="articles">Статьи</a>
                        </li>
                    </ul>
                    <?php if (Application::isGuest()): ?>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Регистрация</a>
                        </li>
                    </ul>
                    <?php else: ?>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="profile">Профиль</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="logout">Выход</a>
                        </li>
                    </ul>  
                    <?php endif; ?>  
                </div>
            </div>
        </nav>

        <div class="container">
            <?php if(Application::$app->session->getFlash('success')): ?>
                <div class="alert alert-success">
                    <?php echo Application::$app->session->getFlash('success') ?>
                </div>
            <?php endif ?>    
            {{content}}
        </div>
        
        <div class="footer mt-auto py-3 ">
            <div class="container">
              <span class="text-muted">&copy; CoffeeFinder 2021</span>
            </div>
        </div>
        
            <!-- Optional JavaScript -->
            <!-- Popper.js first, then Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
        
</html>