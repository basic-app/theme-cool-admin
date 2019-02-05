<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class TableRow extends \PHPTheme\Widget
{

    public $tag = 'tr';

    public $options = [];

    public $columns = [];

    public function render()
    {
        $options = $this->options;

        return PHPTheme::view('table-row', [
            'columns' => $this->columns,
            'options' => $options,
            'tag' => $this->tag
        ]);
    }

}