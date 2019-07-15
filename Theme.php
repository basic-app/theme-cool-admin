<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    const FORM = Form::class;

    const TABLE = Table::class;

    public $defaultFormOptions = [];

    public function createForm(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultFormOptions, $options);

        return $this->createWidget(static::FORM, $options);
    }
    
}