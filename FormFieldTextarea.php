<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormFieldTextarea extends FormFieldText
{

    public static $presets = [
        'editor' => [
            'options' => [
                'class' => 'editor'
            ]
        ],
        'code' => [
            'options' => [
                'class' => 'code'
            ]
        ]
    ];

	protected $viewName = 'form-field-textarea';

}