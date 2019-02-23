<div class="form-group">
    <?php if($label):?><label><?= $label;?></label><?php endif;?>
    <?php
        $options['value'] = 1;

        if ($value == 1)
        {
            $options['checked'] = 'checked';
        }
        echo PHPTheme::input($name, $value, $options, 'checkbox');
    ?>
</div>