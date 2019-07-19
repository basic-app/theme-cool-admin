<?php

namespace BasicApp\CoolAdminTheme;

use BasicApp\Theme\ThemeTrait;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    use ThemeTrait;

    protected $tableClass = Table::class;
    
    protected $formClass = Form::class;

}