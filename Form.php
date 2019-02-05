<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class Form extends Widget
{

	protected $url;

	protected $method = 'POST';

	protected $fields = [];

	protected $errors = [];

	protected $buttons = [];

	protected $options = [];

	protected $setErrors = true;

	protected function renderField($field)
	{
		$type = 'text';

		if (array_key_exists('type', $field))
		{
			$type = $field['type'];

			unset($field['type']);
		}

		$name = 'formField' . ucfirst($type);

		return PHPTheme::widget($name, $field);
	}

	public function render()
	{
		$options = $this->options;

		if ($this->method && !array_key_exists('method', $options))
		{
			$options['method'] = 'POST';
		}

		if ($this->url && !array_key_exists('action', $options))
		{
			$options['action'] = $this->url;
		}

		$fields = [];

		foreach($this->fields as $key => $field)
		{
			if ($this->setErrors)
			{
				foreach($this->errors as $name => $error)
				{
					if ($field['name'] == $name)
					{
						$field['error'] = $error;

						continue;
					}
				}
			}

			$fields[] = static::renderField($field);
		}

		$buttons = $this->buttons;

		if (array_key_exists('submit', $buttons) && array_key_exists('options', $buttons['submit']))
		{
			if (!array_key_exists('class', $buttons['submit']['options']))
			{
				$buttons['submit']['options']['class'] = 'btn btn-primary';
			}
		}

		return PHPTheme::view('form', [
			'options' => $options,
			'fields' => $fields, 
			'errors' => $this->errors,
			'buttons' => $buttons
		]);
	}

}
