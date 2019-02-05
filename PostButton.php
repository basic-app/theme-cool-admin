<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class PostButton extends Widget
{

    public $tag = 'button';

    public $options = [];

    public $formOptions = [];

    public $label;

    public $url;

    public function render()
    {
        $formOptions = $this->formOptions;

        $formOptions['action'] = $this->url;

        $formOptions['method'] = 'POST';

        return PHPTheme::view('post-button', [
            'tag' => $this->tag,
            'options' => $this->options,
            'label' => $this->label,
            'url' => $this->url,
            'formOptions' => $formOptions
        ]);
    }

}