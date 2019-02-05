<?= PHPTheme::beginTag($tag, $options);?>

<?php foreach($columns as $column):?>

    <?php

        $type = '';

        if (array_key_exists('type', $column))
        {
            $type = ucfirst($column['type']);

            unset($column['type']);
        }
    ?>

    <?= PHPTheme::widget('tableColumn' . $type, $column);?>

<?php endforeach;?>

<?= PHPTheme::endTag($tag);?>