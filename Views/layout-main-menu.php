<?php echo PHPTheme\Widgets\Menu::factory([
	'items' => $items,
	'tag' => 'ul',
	'options' => [
		'class' => 'navbar-mobile__list list-unstyled',
	],
	'itemOptions' => [
		'tag' => 'li',
		'activeOptions' => [
			'class' => 'active'
		],
		'template' => '{label}',
		'iconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span> {label}',
		'menuOptions' => [
			'parentOptions' => [
				'class' => 'has-sub'
			],
			'tag' => 'ul',
			'options' => [
				'class' => 'header3-sub-list list-unstyled'
			],
			'itemOptions' => [
				'tag' => 'li'
			]
		]
	]
])->render();?>