<div class="form-group">

	<?php if($label):?><label><?= $label;?></label><?php endif;?>

	<?= PHPTheme::textarea($name, $value, $options);?>

</div>