<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class ButtonForm extends \PHPTheme\Widget
{

    public $method = 'POST';

    public $url;

    public $label;

    public $name;

    public $options = [];

    public $formOptions = [];

    public function render()
    {
        $options = $this->options;

        $options['class'] = 'btn btn-primary';

        if ($this->name)
        {
            $options['name'] = $this->name;
        }

        $options['type'] = 'submit';

        $formOptions = $this->formOptions;

        $formOptions['method'] = $this->method;

        $formOptions['action'] = $this->url;

        return PHPTheme::view('button-form', [
            'options' => $options,
            'formOptions' => $formOptions,
            'label' => $this->label
        ]);
    }

}