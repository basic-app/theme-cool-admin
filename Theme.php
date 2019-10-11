<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Theme extends ThemeAbstract
{

    const PAGER = Pager::class;

    const FORM = Form::class;

    protected $tableClass = Table::class;

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss($this->baseUrl . '/custom.css'); 
    }

}