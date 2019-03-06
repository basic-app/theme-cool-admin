<div class="form-group">
    <?php if($label):?><label style="margin-bottom: 0px; line-height: 1;"><span style="line-height: 1.5;"><?= $label;?></span><?= $separator;?><?php endif;?>
    <?php

        if ($value == 1)
        {
            $options['checked'] = 'checked';
        }

        $value = 1;

        if ($uncheckValue !== null)
        {
            echo PHPTheme::input($name, $uncheckValue, [], 'hidden');
        }

        echo PHPTheme::input($name, $value, $options, 'checkbox');
    ?>

    <?php if($label):?></label><?php endif;?>
</div>