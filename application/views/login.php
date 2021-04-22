<?php
    /** @var $model User */
?>

<div class ="row">
    <div class ="col-12 ">
        <div class="form-signin center-block">
            <?php $form = core\form\Form::begin('', "post") ?>
                <img class="mb-4 " src="/CoffeeFinder/application/vendor/images/logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Вход</h1>
                    <?php echo $form->field($model, 'username') ?>
                    <?php echo $form->field($model, 'password')->passwordField() ?>

                    <button type="submit" class="w-100 btn btn-lg btn-outline-success">Войти</button>
                    <p class="mt-5 mb-3 text-muted">&copy; CoffeeFinder 2021</p>
                <?php core\form\Form::end() ?>
        </div>    
    </div>  
</div>  
   
