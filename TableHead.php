<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class TableHead extends \PHPTheme\Widget
{

    public $options = [];

    public $columns = [];

    public $tag = 'tr';

    public function render()
    {
        if (count($this->columns) == 0)
        {
            return;
        }

        $columns = $this->columns;

        foreach($columns as $key => $column)
        {
            if (is_array($column))
            {
                $columns[$key]['tag'] = 'th';
            }
        }

        $options = $this->options;

        return PHPTheme::view('table-head', [
            'columns' => $columns,
            'tag' => $this->tag,
            'options' => $options
        ]);
    }

}