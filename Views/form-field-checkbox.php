<div class="form-group">
    <?php if($label):?><label><?= $label;?></label><br><?php endif;?>
    <?php

        if ($value == 1)
        {
            $options['checked'] = 'checked';
        }

        $value = 1;

        echo PHPTheme::input($name, $value, $options, 'checkbox');
    ?>
</div>