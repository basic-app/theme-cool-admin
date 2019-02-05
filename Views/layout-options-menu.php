<div class="header-button-item js-item-menu">
	<i class="zmdi zmdi-settings"></i>
	<div class="setting-dropdown js-dropdown">
		<div class="account-dropdown__body">
			<?php
			
			$menu = PHPTheme\Widgets\Menu::factory([
				'items' => $items,
				'itemOptions' => [
					'tag' => 'div',
					'options' => [
						'class' => 'account-dropdown__item',
					]
				]
			]);

			foreach($menu->items as $item)
			{
				echo $item->render();
			}

			?>

		</div>
	</div>
</div>