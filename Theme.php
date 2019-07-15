<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    const FORM = Form::class;

    const TABLE = Table::class;

    const POST_BUTTON = PostButton::class;

    public $defaultFormOptions = [];

    public $defaultPostButtonOptions = [];

    public function createForm(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultFormOptions, $options);

        return $this->createWidget(static::FORM, $options);
    }

    public function postButton(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultPostButtonOptions, $options);

        return $this->widget(static::POST_BUTTON, $options);
    }
    
}