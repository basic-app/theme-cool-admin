<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LayoutNotifications extends Widget
{

	public $items = [];

	public static function prepareItems($items)
	{
		return $items;
	}

    public function render()
    {
    	$items = static::prepareItems($this->items);

        return PHPTheme::view('layout-notifications', [
        	'items' => $items
        ]);
    }

}
