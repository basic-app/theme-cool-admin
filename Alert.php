<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class Alert extends Widget
{

	protected $types = [
		'error' => 'danger'
	];

	protected $type = 'error';

	protected $message;

	public function render()
	{
		$type = strtr($this->type, $this->types);

		return PHPTheme::view('alert', [
			'message' => $this->message,
			'type' => $type
		]);
	}

}