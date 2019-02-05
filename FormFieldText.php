<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormFieldText extends Widget
{

    protected $type = 'text';

	protected $name;

	protected $label;

	protected $error;

	protected $value;

	protected $options = [];

	protected $viewName = 'form-field-text';

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

		return PHPTheme::view($this->viewName, [
			'name' => $this->name,
			'label' => $this->label,
			'error' => $this->error,
			'value' => $value,
			'options' => $options,
            'type' => $this->type
		]);
	}

}