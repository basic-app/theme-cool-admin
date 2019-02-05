<?php

$admin = \BasicApp\Admin\Models\AdminModel::currentAdmin();

$userAvatar = $admin->avatarUrl(PHPTheme::url('images/icon/avatar-01.jpg'));

$userName = $admin->admin_name;

$userEmail = $admin->admin_email;

?>
