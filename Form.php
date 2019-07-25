<?php

namespace BasicApp\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class Form extends \BasicApp\Theme\Form
{

    public $defaultErrorOptions = ['class' => 'alert alert-danger'];

    public $defaultMessageOptions = ['class' => 'alert alert-info'];

    public $defaultLabelOptions = ['class' => 'form-control-label'];

    public $defaultDropdownOptions = ['class' => 'form-control'];

    public $defaultTextareaOptions = ['class' => 'form-control'];

    public $defaultEditorTextareaOptions = ['class' => 'form-control editor'];

    public $defaultCodeTextareaOptions = ['class' => 'form-control code'];  

    public $defaultUploadOptions = ['class' => 'form-control-file'];

    public $defaultSubmitOptions = ['class' => 'au-btn au-btn--green'];

    public $defaultInputOptions = ['class' => 'form-control'];

    public $defaultCheckboxOptions = ['style' => 'display: block;'];

    public $defaultPasswordOptions = ['class' => 'form-control'];

    public $defaultGroupOptions = ['class' => 'form-group'];

    public $defaultImageUploadOptions = ['class' => 'form-control-file'];

    public $defaultFileUploadOptions = ['class' => 'form-control-file'];

}