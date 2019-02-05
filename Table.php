<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class Table extends \PHPTheme\Widget
{

    public $class = 'table table-borderless table-data3'; //_table-striped _table-earning

    public $head = [];

    public $rows = [];

    public $options = [];

    public function render()
    {
        $options = $this->options;

        $options['class'] = $this->class;

        //print_r($this->rows);

        //die;

        return PHPTheme::view('table', [
            'head' => $this->head,
            'rows' => $this->rows,
            'options' => $options
        ]);
    }
    
}
