<?php

if (count($items) == 0)
{
	return;
}

echo PHPTheme\Widgets\Menu::factory([
	'items' => $items,
	'tag' => 'div',
	'options' => [
		'class' => 'text-right'
	],
	'itemOptions' => [
		'activeOptions' => [
			'class' => 'active'
		],
		'linkOptions' => [
			'class' => 'btn btn-secondary'
		],
		'iconTemplate' => '<i class="zmdi zmdi-{icon}"></i><span class="bot-line"></span> <span class="d-none d-sm-inline">{label}</span>',
		'template' => '{label}'
	]
])->render();
