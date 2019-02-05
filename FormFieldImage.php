<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class FormFieldImage extends Widget
{

	public $label;

	public $name;

	public $url;

	public function render()
	{
		return PHPTheme::view('form-field-image', [
			'label' => $this->label,
			'url' => $this->url,
			'name' => $this->name
		]);
	}

}
