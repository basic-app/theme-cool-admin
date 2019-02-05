<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LayoutOptionsMenu extends Widget
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

        return PHPTheme::view('layout-options-menu', [
            'items' => $items
        ]);
    }

}
