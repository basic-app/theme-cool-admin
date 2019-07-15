<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class TableUpdateButtonColumn extends TableColumn
{

    public $url;

    public $label;

    public $linkOptions = [];

    public $template = '<i class="fa fa-edit"></i>';

    public $params = [];

    public function renderDefaultContent()
    {
        $label = $this->label;

        if ($label === null)
        {
            $label = t('theme', 'Update');
        }

        $linkOptions = $this->linkOptions;

        $linkOptions['href'] = $this->url;

        $linkOptions['title'] = $label;

        $content = strtr($this->template, $this->params);

        return Html::tag('a', $content, $linkOptions);
    }

}