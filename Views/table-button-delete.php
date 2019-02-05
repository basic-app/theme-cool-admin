<?php


/*
    $content = admin_theme_view('_layouts/popup', [
        'modalId' => $id,
        'modalTitle' => t('admin', 'Delete'),
        'modalBody' => '<p>' . t('admin', 'Are you sure?') . '</p>',
        'modalFooterAction' => $url,
        'modalFooterButton' => t('admin', 'Delete')
    ]);

    if (!array_key_exists('layoutBodyEnd', $this->data))
    {
        $this->data['layoutBodyEnd'] = '';
    }

    $this->data['layoutBodyEnd'] .= $content; 
*/

PHPTheme::$pageBodyEnd .= PHPTheme::widget('popup', [
    'id' => $id,
    'title' => $label
]);

echo PHPTheme::beginTag($tag, $options);

echo $content;

echo PHPTheme::endTag($tag);