<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class Login extends Widget
{

	protected $form;

	public function render()
	{
		return PHPTheme::view('login', [
			'form' => $this->form
		]);
	}

}