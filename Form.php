<?php

namespace BasicApp\Themes\CoolAdmin;

class Form extends \BasicApp\Theme\Form
{

    public $errorAttributes = ['class' => 'alert alert-danger'];

    public $messageAttributes = ['class' => 'alert alert-info'];

    public $labelAttributes = ['class' => 'form-control-label'];

    public $dropdownAttributes = ['class' => 'form-control'];

    public $textareaAttributes = ['class' => 'form-control'];

    public $editorTextareaAttributes = ['class' => 'form-control editor'];

    public $codeTextareaAttributes = ['class' => 'form-control code'];  

    public $uploadAttributes = ['class' => 'form-control-file'];

    public $submitAttributes = ['class' => 'au-btn au-btn--green'];

    public $inputAttributes = ['class' => 'form-control'];

    public $checkboxAttributes = ['style' => 'display: block;'];

    public $passwordAttributes = ['class' => 'form-control'];

    public $defaultGroupOptions = ['class' => 'form-group'];

    public $defaultImageUploadOptions = ['class' => 'form-control-file'];

    public $defaultFileUploadOptions = ['class' => 'form-control-file'];

}