<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LayoutActionMenu extends Widget
{

    public $items = [];

    public static function prepareItem($item)
    {
    	return $item;
    }

    public function render()
    {
    	$items = $this->items;

    	foreach($items as $item)
    	{
    		$item = static::prepareItem($item);
    	}

        return PHPTheme::view('layout-action-menu', [
            'items' => $items
        ]);
    }

}
