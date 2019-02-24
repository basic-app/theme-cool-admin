<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormFieldCheckbox extends FormFieldText
{

	protected $viewName = 'form-field-checkbox';

    protected $defaultClass = null;

    protected $uncheckValue = 0;

    public function view(string $template, array $params = [])
    {
        $params['uncheckValue'] = $this->uncheckValue;

        return parent::view($template, $params);
    }

}