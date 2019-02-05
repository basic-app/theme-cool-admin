<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormButton extends Widget
{

	public $type = 'submit';

	public $options = [];

	public $label;

	public function render()
	{
		$options = $this->options;

        if ($this->type == 'submit')
        {
		  $options['type'] = $this->type;
        }

		if (!array_key_exists('class', $options))
		{
            if ($this->type == 'submit')
            {
                $options['class'] = 'au-btn au-btn--green';
            }
            else
            {
                $options['class'] = 'btn btn-secondary';
            }
		}

		return PHPTheme::view('form-button', [
			'type' => $this->type,
			'options' => $options,
			'label' => $this->label
		]);
	}

}
