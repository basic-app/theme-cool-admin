<?php

PHPTheme::$pageBodyEnd .= PHPTheme::widget('popup', [
    'id' => $id,
    'title' => $label,
    'content' => '<p>' . PHPTheme::t('Are you sure?') . '</p>',
    'footer' => PHPTheme::widget('PostButton', [
        'tag' => 'button',
        'options' => [
            'class' => 'btn btn-primary'
        ],
        'label' => $label,
        'url' => $url
    ])

]);

echo PHPTheme::beginTag($tag, $options);

echo $content;

echo PHPTheme::endTag($tag);