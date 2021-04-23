<style>
    body
    {
        background-color: rgb(30,32,38);
        color: rgb(255, 255, 255);    
        font-family: Сomic Sans MS;
        text-align: center;
        font-size: 22px;
    }
</style>

<h1>Find Coffee Page</h1>

<?php

$form = core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'cafename') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'district') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'metro') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'product') ?>
    <br>
    <button class="w-100 btn btn-lg btn-outline-success" type="submit">Найти</button>
    <br><br>
<?php core\form\Form::end() ?>

<div class="row">
    <table class="table table-striped tabel-hover table-dark" name="found">
        <thead>
            <tr>
                <th>Название</th>
                <th>Адрес</th>
                <th>Ближайшая станция метро</th>
                <th>Расстояние от метро</th>
                <th>Время в пути (пешком)</th>
                <!-- <th>More</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($model)): 
            foreach($model->foundData as $value) {
        ?>
        <tr>
            <td><?php echo $value['BrandName']; ?></td>
            <td><?php echo $value['Adress']; ?></td>
            <td><?php echo $value['Station']; ?></td>
            <td><?php echo $value['Distance']; ?></td>
            <td><?php echo $value['Time']; ?></td>
            <!-- <td><a class="btn btn-primary" href="cafe" role="button">More</a></td> -->
        </tr>
        <?php } else : ?>
            <h3><?php echo $error; ?></h3>
        <?php endif; ?>
        </tbody>
    </table>


</div>
