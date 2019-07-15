<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Table extends \PhpTheme\CoolAdminTheme\Table
{

    const TABLE_COLUMN = TableColumn::class;

    const TABLE_UPDATE_BUTTON_COLUMN = TableUpdateButtonColumn::class;

    const TABLE_DELETE_BUTTON_COLUMN = TableDeleteButtonColumn::class;

    public $defaultUpdateButtonColumn = [];

    public $defaultDeleteButtonColumn = [];

    public function updateButtonColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultUpdateButtonColumn, $options);

        return $this->theme->createWidget(static::TABLE_UPDATE_BUTTON_COLUMN, $options);
    }

    public function deleteButtonColumn(array $options = [])
    {
        $options = Html::mergeOptions($this->defaultDeleteButtonColumn, $options);

        return $this->theme->createWidget(static::TABLE_DELETE_BUTTON_COLUMN, $options);
    }

}