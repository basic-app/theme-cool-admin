<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Themes\CoolAdmin;

class GridCellBoolean extends \PhpTheme\Themes\CoolAdmin\GridCellBoolean
{

    public $yesLabel = null;

    public $noLabel = null;

    protected function getYesLabel() : string
    {
        return $this->yesLabel ?? t('theme', 'Yes');
    }

    protected function getNoLabel() : string
    {
        return $this->noLabel ?? t('theme', 'No');
    }

}