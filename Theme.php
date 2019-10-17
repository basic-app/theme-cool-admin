<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Html\HtmlHelper;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    public $baseUrl = '/themes/colorlib-cool-admin';

    const PAGER = Pager::class;

    const FORM = Form::class;

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}