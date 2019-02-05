<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class TableButtonDelete extends Widget
{

    public $icon = 'fa fa-times-circle';

    public $options = [];

    public $url;

    public $label;

    public $tag = 'button';

    public $id;

    public function render()
    {
        $label = $this->label;

        if (!$label)
        {
            $label = PHPTheme::t('Delete');
        }

        $options = $this->options;

        $options['title'] = $this->label;

        if ($this->icon)
        {
            $content = '<i class="' . $this->icon . '"></i>';
        }
        else
        {
            $content = $label;
        }

        $id = $this->id;

        if (!$id)
        {
            $id = $this->url;

            $id = trim($id, '/');

            $id = str_replace('http://', '', $id);

            $id = str_replace('https://', '', $id);

            $id = str_replace('/', '_', $id);

            $id = str_replace('.', '_', $id);

            $id = str_replace('?', '_', $id);

            $id = str_replace('&', '_', $id);

            $id = str_replace('%', '_', $id);

            $id = str_replace('=', '_', $id);

            $id = 'modal-delete-' . $id;            
        }

        $options['type'] = 'button';

        $options['data-target'] = '#' . $id;

        $options['style'] = 'color: #ff0000;';

        $options['data-toggle'] = 'modal';

        return PHPTheme::view('table-button-delete', [
            'options' => $options,
            'label' => $label,
            'tag' => $this->tag,
            'id' => $id,
            'content' => $content,
            'url' => $this->url
        ]);
    }

}