<?php

namespace BasicApp\CoolAdminTheme;

use BasicApp\Core\Html;

class TableColumn extends \PhpTheme\CoolAdminTheme\TableColumn
{

    public $numberOptions = [
        'style' => [
            'text-align' => 'right',
            'width' => '1%'
        ]
    ];

    public $displayExtraSmallOptions = ['class' => ['d-none', 'd-table-cell']];

    public $displaySmallOptions = ['class' => ['d-none', 'd-sm-table-cell']];

    public $displayMediumOptions = ['class' => ['d-none', 'd-md-table-cell']];

    public $displayLargeOptions = ['class' => ['d-none', 'd-lg-table-cell']];

    public $displayExtraLargeOptions = ['class' => ['d-none', 'd-xl-table-cell']];

    public function number()
    {
        $this->options = Html::mergeOptions($this->options, $this->numberOptions);

        return $this;
    }

    public function displayExtraSmall()
    {
        $this->options = Html::mergeOptions($this->options, $this->displayExtraSmallOptions);

        $this->headerOptions = Html::mergeOptions($this->headerOptions, $this->displayExtraSmallOptions);

        $this->footerOptions = Html::mergeOptions($this->footerOptions, $this->displayExtraSmallOptions);

        return $this;
    }

    public function displaySmall()
    {
        $this->options = Html::mergeOptions($this->options, $this->displaySmallOptions);

        $this->headerOptions = Html::mergeOptions($this->headerOptions, $this->displaySmallOptions);

        $this->footerOptions = Html::mergeOptions($this->footerOptions, $this->displaySmallOptions);

        return $this;
    }

    public function displayMedium()
    {
        $this->options = Html::mergeOptions($this->options, $this->displayMediumOptions);

        $this->headerOptions = Html::mergeOptions($this->headerOptions, $this->displayMediumOptions);

        $this->footerOptions = Html::mergeOptions($this->footerOptions, $this->displayMediumOptions);

        return $this;
    }

    public function displayLarge()
    {
        $this->options = Html::mergeOptions($this->options, $this->displayLargeOptions);

        $this->headerOptions = Html::mergeOptions($this->headerOptions, $this->displayLargeOptions);

        $this->footerOptions = Html::mergeOptions($this->footerOptions, $this->displayLargeOptions);

        return $this;
    }    

    public function displayExtraLarge()
    {
        $this->options = Html::mergeOptions($this->options, $this->displayExtraLargeOptions);

        $this->headerOptions = Html::mergeOptions($this->headerOptions, $this->displayExtraLargeOptions);

        $this->footerOptions = Html::mergeOptions($this->footerOptions, $this->displayExtraLargeOptions);

        return $this;
    }

}