<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Form extends \BasicApp\Core\ModelForm
{

    public $defaultEditorTextareaOptions = [];

    public $defaultImageUploadOptions = [];

    public $defaultFileUploadOptions = [];

    public $defaultSubmitOptions = ['class' => 'au-btn au-btn--green'];

    public $defaultInputOptions = ['class' => 'form-control'];

    public $defaultCheckboxOptions = ['style' => 'display: block;'];

    public $defaultPasswordOptions = ['class' => 'form-control'];

    public $defaultGroupOptions = ['class' => 'form-group'];

    public function editorTextarea($attribute, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultEditorTextareaOptions, $options);

        return $this->textarea($attribute, $options, $groupOptions);
    }

    public function imageUpload($attribute, $filename = null, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultImageUploadOptions, $options);

        return $this->upload($attribute, $options, $groupOptions);
    }

    public function fileUpload($attribute, $filename = null, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultFileUploadOptions, $options);

        return $this->upload($attribute, $options, $groupOptions);
    }

}