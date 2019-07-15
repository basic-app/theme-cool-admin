<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class PostButton extends \PhpTheme\Html\Tag
{

    public $formOptions = [];

    public $url;

    public function run()
    {
        $content = parent::run();

        $formOptions = $this->formOptions;

        $formOptions['method'] = 'POST';

        $formOptions['action'] = $this->url;

        return Html::tag('form', $content, $formOptions);
    }

}
