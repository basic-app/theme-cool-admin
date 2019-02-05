<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LayoutBreadcrumbs extends Widget
{

	public $items = [];

	public $actionMenu = [];

	public static function prepareItems($items)
	{
		return $items;
	}

    public function render()
    {
    	$items = static::prepareItems($this->items);

        return PHPTheme::view('layout-breadcrumbs', [
        	'items' => $items,
        	'actionMenu' => $this->actionMenu
        ]);
    }

}
