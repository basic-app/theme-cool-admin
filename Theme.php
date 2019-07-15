<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Core\Html;

class Theme extends \PhpTheme\CoolAdminTheme\Theme
{

    const FORM = Form::class;

    const TABLE = Table::class;

    const TABLE_UPDATE_BUTTON_COLUMN = TableUpdateButtonColumn::class;

    const TABLE_DELETE_BUTTON_COLUMN = TableDeleteButtonColumn::class;

    public $defaultFormOptions = [];

    public function createForm(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultFormOptions, $options);

        return $this->createWidget(static::FORM, $options);
    }

    public function updateButtonColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultUpdateButtonColumn, $options);

        return $this->createWidget(static::TABLE_UPDATE_BUTTON_COLUMN, $options);
    }
    
}