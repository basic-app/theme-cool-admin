<?php

$config = config(Config\Pager::class);

if (property_exists($config, 'surroundCount'))
{
	$surroundCount = $config->surroundCount;
}
else
{
	$surroundCount = 3;
}

?>

<?php $pager->setSurroundCount($surroundCount);?>

<nav aria-label="<?= lang('Pager.pageNavigation');?>">

  <ul class="pagination justify-content-center">

	<?php if ($pager->hasPrevious()) : ?>

		<li class="page-item">
			<a class="page-link" href="<?= $pager->getFirst();?>" aria-label="<?= lang('Pager.first');?>">
				<span aria-hidden="true"><?= lang('Pager.first');?></span>
			</a>
		</li>
		
		<li class="page-item">
			<a class="page-link" href="<?= $pager->getPrevious();?>" aria-label="<?= lang('Pager.previous');?>">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
	
	<?php endif;?>

	<?php foreach ($pager->links() as $link) : ?>

		<?php if ($link['active']):?>

			<li class="page-item active"><a class="page-link" href="<?= $link['uri'];?>"><?= $link['title'];?> <span class="sr-only">(current)</span></a></li>

		<?php else:?>

			<li class="page-item"><a class="page-link" href="<?= $link['uri'];?>"><?= $link['title'];?></a></li>

		<?php endif;?>
		
	<?php endforeach;?>

	<?php if ($pager->hasNext()) : ?>
	
		<li class="page-item">
			<a class="page-link" href="<?= $pager->getNext();?>" aria-label="<?= lang('Pager.next');?>">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	
		<li class="page-item">
			<a class="page-link" href="<?= $pager->getLast();?>" aria-label="<?= lang('Pager.last');?>">
				<span aria-hidden="true"><?= lang('Pager.last');?></span>
			</a>
		</li>
	
	<?php endif ?>	

  </ul>

</nav>