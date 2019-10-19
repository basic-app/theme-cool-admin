<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Html\HtmlHelper;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    public $baseUrl = '/themes/colorlib-cool-admin';

    const PAGER = Pager::class;

    const FORM = Form::class;

    public function beginLayout(array $params = [])
    {
        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css');

        return parent::beginLayout($params);
    }

    public function layout(array $params = [])
    {
        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css');

        return parent::layout($params);
    }

}