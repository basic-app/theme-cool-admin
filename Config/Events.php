<?php

BasicApp\System\SystemEvents::onInstall(function() {

    PhpTheme\Helpers\FileHelper::copy(dirname(__DIR__) . '/custom.css', FCPATH . 'themes/colorlib-cool-admin/custom.css');

});

BasicApp\Admin\AdminEvents::onAdminThemeList(function($event) {

    $event->result['BasicApp\CoolAdminTheme\Theme'] = 'Colorlib - Cool Admin';

});