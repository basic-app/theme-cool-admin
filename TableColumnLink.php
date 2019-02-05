<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class TableColumnLink extends TableColumn
{

    public $linkOptions = [];

    public $label;

    public $url;

    public function render()
    {
        $options = $this->options;

        $linkOptions = $this->linkOptions;

        $linkOptions['href'] = $this->url;        

        return PHPTheme::view('table-column-link', [
            'tag' => $this->tag,
            'options' => $options,
            'linkOptions' => $linkOptions,
            'label' => $this->label
        ]);
    }

}