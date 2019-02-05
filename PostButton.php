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
        $options = $this->options;

        $options['type'] = 'submit';

        $formOptions = $this->formOptions;

        $formOptions['action'] = $this->url;

        $formOptions['method'] = 'POST';

        return PHPTheme::view('post-button', [
            'tag' => $this->tag,
            'options' => $options,
            'label' => $this->label,
            'url' => $this->url,
            'formOptions' => $formOptions
        ]);
    }

}