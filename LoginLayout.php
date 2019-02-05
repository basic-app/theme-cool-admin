<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LoginLayout extends Widget
{

	protected $content;

	public function render()
	{
		return PHPTheme::view('login-layout', [
			'content' => $this->content
		]);
	}

}