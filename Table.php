<?php

namespace BasicApp\CoolAdminTheme;

use BasicApp\Core\Html;

class Table extends \PhpTheme\CoolAdminTheme\Table
{

    const COLUMN = TableColumn::class;

//    public $defaultPrimaryColumn = [];

//    public $defaultTextColumn = [];

//    public $defaultNumberColumn = [];

    /*
    public function primaryColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultPrimaryColumn, $options);

        return $this->createColumn($options);
    }

    public function textColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultTextColumn, $options);

        return $this->createColumn($options);
    }

    public function numberColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultNumberColumn, $options);

        return $this->createColumn($options);
    }
    
    */

}