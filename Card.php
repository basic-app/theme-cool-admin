<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class Card extends \PHPTheme\Widget
{

    public $header;

    public $content;

    public $footer;

    public function render()
    {
        return PHPTheme::view('card', [
            'header' => $this->header,
            'content' => $this->content,
            'footer' => $this->footer
        ]);
    }

}