<?php

namespace Theme\CoolAdmin;

use PHPTheme;
use PHPTheme\Widget;

class Layout extends Widget
{

    public $title = '';

    public $copyright = 'Copyright © 2018 - {year} <a href="http://example.com" target="_blank">Company</a>. All rights reserved.';

    public $breadcrumbs = [];

    public $breadcrumbsOptions = [];

    public $actionMenu = [];

    public $actionMenuOptions = [];

    public $mainMenu = [];

    public $mainMenuOptions = [];

    public $content;

    public $logoutUrl = '/logout';

    public $notifications = [];

    public $userName;

    public $userAvatar;

    public $userEmail;

    public $optionsMenu = [];

    public $optionsMenuOptions = [];

    public function render()
    {
    	// breadcrumbs

    	$breadcrumbs = $this->breadcrumbsOptions;

    	$breadcrumbs['items'] = $this->breadcrumbs;

    	// main menu

    	$mainMenu = $this->mainMenuOptions;

    	$mainMenu['items'] = $this->mainMenu;

    	// action menu

    	$actionMenu = $this->actionMenuOptions;

    	$actionMenu['items'] = $this->actionMenu;

    	// action menu

    	$optionsMenu = $this->optionsMenuOptions;

    	$optionsMenu['items'] = $this->optionsMenu;

    	// prepare copyright

    	$copyright = strtr($this->copyright, ['{year}' => date('Y')]);

    	// copy actionMenu to breadcrumbs

    	$breadcrumbs['actionMenu'] = $actionMenu;

    	// avatar

    	$userAvatar = $this->userAvatar;

    	if (!$userAvatar)
    	{
    		$userAvatar = PHPTheme::url('images/icon/avatar-01.jpg');
    	}

        return PHPTheme::view('layout', [
            'title' => $this->title,
            'copyright' => $copyright,
            'breadcrumbs' => $breadcrumbs,
            'actionMenu' => $actionMenu,
            'mainMenu' => $mainMenu,
            'content' => $this->content,
            'logoutUrl' => $this->logoutUrl,
            'notifications' => $this->notifications,
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userAvatar' => $userAvatar,
            'optionsMenu' => $optionsMenu
        ]);
    }

}
