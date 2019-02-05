<div class="form-group">

	<?php if($label):?><label><?= $label;?></label><?php endif;?>

	<?= PHPTheme::input($name, $value, $options, $type);?>

</div>