<?php

namespace BasicApp\Themes\CoolAdmin;
    
class Pager extends \PhpTheme\Core\Widget
{

    public $pager;

    public function toString() : string
    {
        return $this->render('pager', [
            'pager' => $this->pager
        ]);
    }

}