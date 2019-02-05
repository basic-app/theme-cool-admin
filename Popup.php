<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class Popup extends \PHPTheme\Widget
{

    public $id;

    public $title;

    public $content;

    public $footer;

    public $closeButtonLabel = 'Close';

    public $cancelButtonLabel = 'Cancel';

    public function render()
    {
        return PHPTheme::view('popup', [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'footer' => $this->footer,
            'closeButtonLabel' => $this->closeButtonLabel,
            'cancelButtonLabel' => $this->cancelButtonLabel
        ]);
    }

}
