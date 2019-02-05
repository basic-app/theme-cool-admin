<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class LoginForm extends Form
{

	public static function factory(array $params = [])
	{
		foreach($params['fields'] as $key => $field)
		{
			$params['fields'][$key]['options']['class'] = 'form-control au-input au-input--full';
		}

		$params['buttons']['submit']['options']['class'] = 'au-btn au-btn--green';

		return parent::factory($params);
	}

}
