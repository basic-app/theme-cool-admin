<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LayoutMainMenu extends Widget
{

	public $items = [];

	public static function prepareItems($items)
	{
        foreach($items as $key => $value)
        {
            if(!empty($value['items']))
            {
                $items[$key]['options'] = PHPTheme::mergeHtmlOptions(isset($items[$key]['options']) ? $items[$key]['options'] : [], ['class' => 'has-sub']);
            }
        }

		return $items;
	}

    public function render()
    {
    	$items = static::prepareItems($this->items);

        return PHPTheme::view('layout-main-menu', [
        	'items' => $items
        ]);
    }

}