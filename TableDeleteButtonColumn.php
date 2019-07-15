<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class TableDeleteButtonColumn extends TableColumn
{

    public $url;

    public $label;

    public $linkOptions = [];

    public $template = '<i class="fa fa-times-circle"></i>';

    public $params = [];

    public $id;

    public function renderContent()
    {
        $id = $this->id;

        if (!$id)
        {
            $id = 'delete-popup-' . $this->row->getPrimaryKey();
        }

        $label = $this->label;

        if ($label === null)
        {
            $label = t('theme', 'Delete');
        }

        $deleteButton = $this->theme->postButton([
            'tag' => 'button',
            'content' => $label,
            'options' => [
                'type' => 'submit',
                'class' => 'btn btn-primary'
            ],
            'url' => $this->url
        ]);

        $popup = $this->theme->popup([
            'id' => $id,
            'title' => $label,
            'content' => '<p>' . t('theme', 'Are you sure?') . '</p>',
            'footer' => $deleteButton
        ]);

        $this->theme->endBody .= $popup;

        $linkOptions = $this->linkOptions;

        $linkOptions['data-target'] = '#' . $id;

        $linkOptions['data-toggle'] = 'modal'; 

        $linkOptions['href'] = '#';

        $linkOptions['style'] = 'color: #ff0000;';

        $content = strtr($this->template, $this->params);

        return Html::tag('a', $content, $linkOptions);
    }

}