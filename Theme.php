<?php

namespace BasicApp\CoolAdminTheme;

use BasicApp\Theme\ThemeTrait;
use PhpTheme\Helpers\Html;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    use ThemeTrait;

    protected $tableClass = Table::class;
    
    protected $formClass = Form::class;

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss('/CoolAdmin/custom.css'); 
    }

}