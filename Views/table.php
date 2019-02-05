<!-- DATA TABLE-->
<div class="table-responsive m-b-40">
    
    <?= PHPTheme::beginTag('table', $options);?>

    <?= PHPTheme::widget('tableHead', $head);?>

    <tbody>

        <tr>

            <?php foreach($rows as $row):?>

                <?php if(is_array($row)):?>

                    <?= PHPTheme::widget('tableRow', $row);?>

                <?php else:?>

                    <?= $row;?>

                <?php endif;?>

            <?php endforeach;?>

        </tr>

    </tbody>

    <?= PHPTheme::endTag('table');?>

</div>
<!-- END DATA TABLE-->