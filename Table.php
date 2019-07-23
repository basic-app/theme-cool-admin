<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;
use BasicApp\Theme\TableTrait;

class Table extends \PhpTheme\CoolAdminTheme\Table
{

    protected $tableColumnClass = TableColumn::class;
    
}