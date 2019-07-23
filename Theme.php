<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    protected $tableClass = Table::class;
    
    protected $formClass = Form::class;

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss('/CoolAdmin/custom.css'); 
    }

}