<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class FilePreview extends \PhpTheme\Core\Widget
{

    public $url;

    public function run()
    {
        return $this->render('file-preview', [
            'url' => $this->url
        ]);
    }

}