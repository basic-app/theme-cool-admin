<?php

namespace BasicApp\Themes\CoolAdmin;

use BasicApp\Helpers\HtmlHelper;

class Theme extends \PhpTheme\Themes\CoolAdmin\Theme
{

    public $baseUrl = '/themes/colorlib-cool-admin';

    const PAGER = Pager::class;

    const FORM = Form::class;

    const GRID_CELL_BOOLEAN = GridCellBoolean::class;

    const GRID_HEADER_BOOLEAN = GridHeaderBoolean::class;

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