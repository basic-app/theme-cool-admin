<?php

foreach($errors as $error)
{
    echo PHPTheme::widget('alert', [
        'type' => 'error',
        'message' => $error
    ]);
}
