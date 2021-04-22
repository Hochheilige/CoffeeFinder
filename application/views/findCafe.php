<h1>Find Coffee Page</h1>

<?php $form = core\form\Form::begin('', "post") ?>
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

    <button type="submit" class="btn btn-primary">Submit</button>
<?php core\form\Form::end() ?>

<div class="row">
    <table class="table table-striped tabel-hover" name="found">
        <thead>
            <tr>
                <th>Brand Name</th>
                <th>Adress</th>
                <th>Nearest Metro Station</th>
                <th>Distance</th>
                <th>Time</th>
                <th>More</th>
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
            <td><a class="btn btn-primary" href="cafe" role="button">More</a></td>
        </tr>
        <?php } else : ?>
            <h3><?php echo $error; ?></h3>
        <?php endif; ?>
        </tbody>
    </table>


</div>
