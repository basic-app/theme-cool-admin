<?php

$adminConfig = config(Config\Custom\Admin::class);

$items = $adminConfig->actionMenuItems();

if (count($items) == 0)
{
	return;
}

echo BasicApp\Html\Menu::factory([
	'tag' => 'div',
	'options' => [
		'class' => 'text-right'
	],
	'item' => [
		'activeOptions' => [
			'class' => 'active'
		],
		'linkOptions' => [
			'class' => 'btn btn-secondary'
		],
		'iconTemplate' => '<i class="zmdi zmdi-{icon}"></i><span class="bot-line"></span> <span class="d-none d-sm-inline">{label}</span>',
		'template' => '{label}'
	]
])->render($items);