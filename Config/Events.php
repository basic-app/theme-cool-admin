<?php

BasicApp\System\SystemEvents::onInstall(function() {

    PhpTheme\Helpers\FileHelper::copy(dirname(__DIR__) . '/custom.css', FCPATH . 'CoolAdmin/custom.css');

});

BasicApp\Admin\AdminEvents::onAdminThemes(function($event) {

    $event->return['BasicApp\CoolAdminTheme\Theme'] = 'CoolAdmin';

});