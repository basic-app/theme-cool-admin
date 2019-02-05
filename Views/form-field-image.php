<div class="form-group">

	<?php if($label):?><label><?= $label;?></label><br><?php endif;?>

	<?= PHPTheme::input($name, '', $options, 'file');?>

	<?php if($url):?>

	<div class="mb-3 mt-3">

		<img src="<?= $url;?>" style="max-width: 200px; max-height: 200px;">

	</div>

	<?php endif;?>

</div>