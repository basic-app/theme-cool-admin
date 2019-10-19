<?php

use BasicApp\Helpers\CliHelper;
use BasicApp\System\SystemEvents;
use BasicApp\Admin\AdminEvents;

if (class_exists(SystemEvents::class))
{
    SystemEvents::onUpdate(function() {

        $themeDir = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'colorlib-cool-admin';

        if (is_dir($themeDir))
        {
            return;
        }

        CliHelper::downloadToFile('https://codeload.github.com/puikinsh/CoolAdmin/zip/master', $themeDir . '.zip');
        
        CliHelper::zipExtractTo($themeDir . '.zip', $themeDir);
        
        CliHelper::delete($themeDir . '.zip');
        
        CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master/css', $themeDir . DIRECTORY_SEPARATOR . 'css');
        
        CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master/fonts', $themeDir . DIRECTORY_SEPARATOR . 'fonts');
        
        CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master/images', $themeDir . DIRECTORY_SEPARATOR . 'images');
        
        CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master/js', $themeDir . DIRECTORY_SEPARATOR . 'js');
        
        CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master/vendor', $themeDir . DIRECTORY_SEPARATOR . 'vendor');
        
        CliHelper::delete($themeDir . DIRECTORY_SEPARATOR . 'CoolAdmin-master');
        
        CliHelper::copy(dirname(__DIR__) . '/Css/custom.css', $themeDir . DIRECTORY_SEPARATOR . 'custom.css');
    });
}

if (class_exists(AdminEvents::class))
{
    AdminEvents::onTheme(function($event) {

        $event->result['BasicApp\CoolAdminTheme\Theme'] = 'Cool Admin by Colorlib';

    });
}