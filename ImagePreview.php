<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class ImagePreview extends \PhpTheme\Core\Widget
{

    public $url;

    public function run()
    {
        return $this->render('image-preview', [
            'url' => $this->url
        ]);
    }

}