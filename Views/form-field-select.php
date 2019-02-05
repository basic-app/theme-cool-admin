<div class="form-group">

    <?php if($label):?><label><?= $label;?></label><?php endif;?>

    <?= PHPTheme::select($name, $items, $value, $options);?>

</div>