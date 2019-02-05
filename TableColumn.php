<?php

namespace Theme\CoolAdmin;

use PHPTheme;

class TableColumn extends \PHPTheme\Widget
{

    public static $presets = [
        'extra-small' => [
            'options' => ['class' => 'd-none d-table-cell']
        ],
        'small' => [
            'options' => ['class' => 'd-none d-sm-table-cell']
        ],
        'medium' => [
            'options' => ['class' => 'd-none d-md-table-cell']
        ],
        'large' => [
            'options' => ['class' => 'd-none d-lg-table-cell']
        ], 
        'extra-large' => [
            'options' => ['class' => 'd-none d-xl-table-cell']
        ],       
        'id' => [
            'options' => [
                'class' => 'text-right',
                'style' => 'width: 1%;'
            ]
        ],
        'date' => [
            'options' => [
            ]
        ],
        'number' => [
            'options' => [
                'class' => 'text-right'
            ]       
        ],
        'primary' => [
            'options' => [
                'class' => 'process'
            ]
        ],
        'button' => [
            'options' => [
                'style' => 'width: 1%; padding-left: 10px;'
            ]
        ],
        'link' => [
            'options' => [
                'style' => 'width: 1%; padding-left: 10px;'
            ]
        ]    
    ];

    public $tag = 'td';

    public $options = [];

    public $content;

    public function render()
    {
        $options = $this->options;        

        return PHPTheme::view('table-column', [
            'tag' => $this->tag,
            'options' => $options,
            'content' => $this->content
        ]);
    }

}