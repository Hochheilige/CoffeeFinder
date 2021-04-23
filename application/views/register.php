<style>
        body
        {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: rgb(30,32,38);
            color: rgb(255, 255, 255);    
            font-family: Сomic Sans MS;
            text-align: center;
            font-size: 22px;
        }
        .bd-placeholder-img 
        {
            font-size: 2.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) 
        {
          .bd-placeholder-img-lg {
            font-size: 4.5rem;
          }
        }

        .form-registration {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
        }

        .form-registration .form-floating:focus-within {
          z-index: 2;
        }

        .form-registration input[type="username"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }

        .form-registration input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }       
    </style>

<div class ="row">
    <div class ="col-12 ">
        <div class="form-registration center-block">
            <?php $form = core\form\Form::begin('', "post") ?>
                    <img class="mb-4 " src="/CoffeeFinder/application/vendor/images/logo.png" alt="" width="100" height="100">
                    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>   
                    <?php echo $form->field($model, 'username') ?>
                    <?php echo $form->field($model, 'firstname') ?>
                    <?php echo $form->field($model, 'lastname') ?>
                    <?php echo $form->field($model, 'email') ?>
                    <?php echo $form->field($model, 'password')->passwordField() ?>
                    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

                    <button class="w-100 btn btn-lg btn-outline-success" type="submit">Регистрация</button>
                    <p class="mt-5 mb-3 text-muted">&copy; CoffeeFinder 2021</p>
             <?php core\form\Form::end() ?> 
        </div>    
     </div>  
</div>
