<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class TableButtonUpdate extends Widget
{

    public $label;

    public $options = [];

    public $icon = 'fa fa-edit';

    public $url;

    public function render()
    {
        $options = $this->options;

        $options['href'] = $this->url;

        if ($this->label)
        {
            $options['title'] = $this->label;
        }

        $label = $this->label;

        if ($this->icon)
        {
            $label = '<i class="' . $this->icon . '"></i>';
        }

        return PHPTheme::view('table-button-update', [
            'options' => $options,
            'label' => $label
        ]);
    }

}