<?php

namespace Theme\CoolAdmin;

use PHPTheme\Widget;
use PHPTheme;

class FormErrors extends Widget
{

    public $errors = [];

    public function render()
    {
        if (count($this->errors) == 0)
        {
            return;
        }

        return PHPTheme::view('form-errors', [
            'errors' => $this->errors
        ]);
    }

}