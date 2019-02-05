<div class="card">

	<?php if($header):?>

	<div class="card-header">

		<?= $header;?>

	</div>

	<?php endif;?>

	<div class="card-body card-block">

		<?= $content;?>

	</div>

	<?php if($footer):?>

	<div class="card-footer">

		<?= $footer;?>

	</div>

	<?php endif;?>

</div>