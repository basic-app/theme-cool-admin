<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Form extends \BasicApp\Core\ModelForm
{

    public $defaultLabelOptions = ['class' => 'form-control-label'];

    public $defaultDropdownOptions = ['class' => 'form-control'];

    public $defaultEditorTextareaOptions = ['class' => 'form-control editor'];

    public $defaultUploadOptions = ['class' => 'form-control-file'];

    public $defaultImageUploadOptions = ['class' => 'form-control-file'];

    public $defaultFileUploadOptions = ['class' => 'form-control-file'];

    public $defaultSubmitOptions = ['class' => 'au-btn au-btn--green'];

    public $defaultInputOptions = ['class' => 'form-control'];

    public $defaultCheckboxOptions = ['style' => 'display: block;'];

    public $defaultPasswordOptions = ['class' => 'form-control'];

    public $defaultGroupOptions = ['class' => 'form-group'];

    public $defaultImagePreviewOptions = [];

    public $defaultFilePreviewOptions = [];

    const IMAGE_PREVIEW = ImagePreview::class;

    const FILE_PREVIEW = FilePreview::class;

    public function editorTextarea($attribute, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultEditorTextareaOptions, $options);

        return $this->textarea($attribute, $options, $groupOptions);
    }

    public function imageUpload($attribute, $filename = null, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultImageUploadOptions, $options);

        if (!array_key_exists('suffix', $groupOptions))
        {
            $groupOptions['suffix'] = $this->imagePreview(['url' => $filename]);
        }

        return $this->upload($attribute, $options, $groupOptions);
    }

    public function fileUpload($attribute, $filename = null, array $options = [], $groupOptions = [])
    {
        $options = Html::mergeOptions($this->defaultFileUploadOptions, $options);

        if (!array_key_exists('suffix', $groupOptions))
        {
            $groupOptions['suffix'] = $this->filePreview(['url' => $filename]);
        }

        return $this->upload($attribute, $options, $groupOptions);
    }

    public function imagePreview(array $options)
    {
        $options = Html::mergeOptions($this->defaultImagePreviewOptions, $options);

        return $this->theme->widget(static::IMAGE_PREVIEW, $options);
    }

    public function filePreview(array $options)
    {
        $options = Html::mergeOptions($this->defaultFilePreviewOptions, $options);

        return $this->theme->widget(static::FILE_PREVIEW, $options);
    }

}