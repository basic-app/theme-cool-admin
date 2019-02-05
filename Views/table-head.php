<thead>

    <?= PHPTheme::beginTag($tag, $options);?>

        <?php foreach($columns as $column):?>

            <?= PHPTheme::widget('tableColumn', $column);?>            

        <?php endforeach;?>

    <?= PHPTheme::endTag($tag);?>

</thead>