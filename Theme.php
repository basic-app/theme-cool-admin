<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Theme extends ThemeAbstract
{

    protected $tableClass = Table::class;
    
    protected $formClass = Form::class;

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss('/themes/colorlib-cool-admin/custom.css'); 
    }

}