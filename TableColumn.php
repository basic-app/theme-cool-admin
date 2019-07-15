<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class TableColumn extends \PhpTheme\CoolAdminTheme\TableColumn
{

    public $numberOptions = [
        'style' => [
            'text-align' => 'right',
            'width' => '1%'
        ]
    ];

    public function number()
    {
        $this->options = Html::mergeOptions($this->options, $this->numberOptions);

        return $this;
    }

}