<?php
    /** @var $model User */
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Вход</title>

                <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <link href="login_style.css?<?rand()?>" rel="stylesheet"/>
</head>
<body class="text-center">
    <div class ="row">
        <div class ="col-12 ">

            <div class="form-signin center-block">
                <form>
                    <img class="mb-4 " src="layouts/logo.png" alt="" width="100" height="100">
                    <h1 class="h3 mb-3 fw-normal">Вход</h1>
                    <div class="form-floating">
                    <label for="floatingInput">Логин</label>
                    <input type="username" class="form-control" id="floatingInput" placeholder="Username">
                    </div>
                    <div class="form-floating">
                    <label for="floatingPassword">Пароль</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>
                    <button class="w-100 btn btn-lg btn-outline-success" type="submit">Войти</button>
                    <p class="mt-5 mb-3 text-muted">&copy; CoffeeFinder 2021</p>
                </form>
            </div>    
        </div>  
    </div>  
    <div class="container-fluid footer">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
        
        
    
   
   

<?php //$form = core\form\Form::begin('', "post") ?>
    <?php //echo $form->field($model, 'username') ?>
    <?php //echo $form->field($model, 'password')->passwordField() ?>
<?php //core\form\Form::end() ?>    
</html>