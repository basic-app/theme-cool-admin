<!DOCTYPE html>
<html lang="<?= PHPTheme::lang();?>">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <?php
    /*
    <!-- Title Page-->
    <title>Login</title>

    */
    ?>

    <!-- Fontfaces CSS-->
    <link href="<?= PHPTheme::url('css/font-face.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= PHPTheme::url('vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= PHPTheme::url('vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/wow/animate.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/slick/slick.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= PHPTheme::url('vendor/perfect-scrollbar/perfect-scrollbar.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= PHPTheme::url('css/theme.css');?>" rel="stylesheet" media="all">

    <!-- Jquery JS-->
    <script src="<?= PHPTheme::url('vendor/jquery-3.2.1.min.js');?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?= PHPTheme::url('vendor/bootstrap-4.1/popper.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/bootstrap-4.1/bootstrap.min.js');?>"></script>
    <!-- Vendor JS -->
    <script src="<?= PHPTheme::url('vendor/slick/slick.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/wow/wow.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/animsition/animsition.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/counter-up/jquery.waypoints.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/counter-up/jquery.counterup.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/circle-progress/circle-progress.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/chartjs/Chart.bundle.min.js');?>"></script>
    <script src="<?= PHPTheme::url('vendor/select2/select2.min.js');?>"></script>

    <?php

    /*

    <script type="text/javascript" src="<?= base_url('js/pjax2/jquery.pjax.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('js/custom.js');?>"></script>

    */
    ?>

    <?php PHPTheme::trigger('pageHead');?>
    
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                    
						<?= $content;?>                    
                    
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Main JS-->
    <script src="<?= PHPTheme::url('js/main.js');?>"></script>

</body>

</html>
<!-- end document-->