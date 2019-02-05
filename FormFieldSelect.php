<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormFieldSelect extends Widget
{

    protected $name;

    protected $label;

    protected $error;

    protected $value;

    protected $items = [];

    protected $options = [];

    protected $prompt;

    public function render()
    {
        $options = $this->options;

        $value = $this->value;

        if ($value === null)
        {
            $value = '';
        }

        if (!array_key_exists('class', $options))
        {
            $options['class'] = 'form-control';
        }

        if ($this->error)
        {
            if (!array_key_exists('class', $options))
            {
                $options['class'] = 'is-invalid';
            }
            else
            {
                $options['class'] .= ' is-invalid';
            }
        }

        if (!is_array($value))
        {
            $value = array($value);
        }

        if ($this->prompt)
        {
            $items = ['' => $this->prompt] + $this->items;
        }
        else
        {
            $items = $this->items;
        }

        return PHPTheme::view('form-field-select', [
            'name' => $this->name,
            'label' => $this->label,
            'error' => $this->error,
            'value' => $value,
            'options' => $options,
            'items' => $items
        ]);
    }

}