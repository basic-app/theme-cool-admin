<div class="form-group">
    <?php if($label):?><label style="margin-bottom: 0px; line-height: 1;"><span style="display: block; line-height: 1.5; margin-bottom: .5rem;"><?= $label;?></span><?php endif;?>
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