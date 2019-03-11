<!DOCTYPE html>
<html lang="<?= PHPTheme::lang();?>">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">
<!-- Title Page-->
<title><?= PHPTheme::escape($title);?></title>
<!-- Fontfaces CSS-->
<link href="<?= PHPTheme::url('css/font-face.css');?>" rel="stylesheet" media="all">
<link href="<?= PHPTheme::url('vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
<link href="<?= PHPTheme::url('vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
<link href="<?= PHPTheme::url('vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="<?= PHPTheme::url('vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all">
<!-- Vendor CSS-->
<!--
<link href="<?= PHPTheme::url('vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
-->
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
<!-- Vendor JS       -->
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
<style type="text/css">
.header-mobile-2.header-mobile .navbar-mobile
{
    top: 66px;
}

.table-data3 tbody tr td:last-child
{
    padding-right: 20px;
}

@media (max-width: 1315px) and (min-width: 992px)
{
    .header__navbar ul li a i
    {
        min-width: 20px;
    }
}

.account-item--style2 .image
{
    border: 2px solid #ccc;

}
</style>
<?php PHPTheme::pageHead();?>
</head>
<body style="background-color: #f7f7f7;">
<?php PHPTheme::pageBodyBegin();?>
<div class="page-wrapper">
	<!-- HEADER DESKTOP-->
	<header class="header-desktop3 d-none d-lg-block">
	    <div class="section__content section__content--p35">
	        <div class="header3-wrap">                            
	            <div class="header__logo">
	            	<?php

                    /*
	                <a href="<?= site_url('admin');?>" style="color: #ccc;">           
	                	        
	                    <img src="<?= admin_theme_url();?>/images/icon/logo-white.png" alt="CoolAdmin" />
	                				
	                </a>
	                */

                    ?>
	            </div>
	            <div class="header__navbar">

	            	<?= PHPTheme::widget('layoutMainMenu', $mainMenu);?>

					<?php
						/*

						<li class="has-sub">
						    <a href="#">
						        <i class="fas fa-tachometer-alt"></i>Dashboard
						        <span class="bot-line"></span>
						    </a>
						    <ul class="header3-sub-list list-unstyled">
						        <li>
						            <a href="index.html">Dashboard 1</a>
						        </li>
						        <li>
						            <a href="index2.html">Dashboard 2</a>
						        </li>
						        <li>
						            <a href="index3.html">Dashboard 3</a>
						        </li>
						        <li>
						            <a href="index4.html">Dashboard 4</a>
						        </li>
						    </ul>
						</li>
						<li>
						    <a href="#">
						        <i class="fas fa-shopping-basket"></i>
						        <span class="bot-line"></span>eCommerce</a>
						</li>
						<li>
						    <a href="table.html">
						        <i class="fas fa-trophy"></i>
						        <span class="bot-line"></span>Features</a>
						</li>
						<li class="has-sub">
						    <a href="#">
						        <i class="fas fa-copy"></i>
						        <span class="bot-line"></span>Pages</a>
						    <ul class="header3-sub-list list-unstyled">
						        <li>
						            <a href="login.html">Login</a>
						        </li>
						        <li>
						            <a href="register.html">Register</a>
						        </li>
						        <li>
						            <a href="forget-pass.html">Forget Password</a>
						        </li>
						    </ul>
						</li>
						<li class="has-sub">
						    <a href="#">
						        <i class="fas fa-desktop"></i>
						        <span class="bot-line"></span>UI Elements</a>
						    <ul class="header3-sub-list list-unstyled">
						        <li>
						            <a href="button.html">Button</a>
						        </li>
						        <li>
						            <a href="badge.html">Badges</a>
						        </li>
						        <li>
						            <a href="tab.html">Tabs</a>
						        </li>
						        <li>
						            <a href="card.html">Cards</a>
						        </li>
						        <li>
						            <a href="alert.html">Alerts</a>
						        </li>
						        <li>
						            <a href="progress-bar.html">Progress Bars</a>
						        </li>
						        <li>
						            <a href="modal.html">Modals</a>
						        </li>
						        <li>
						            <a href="switch.html">Switchs</a>
						        </li>
						        <li>
						            <a href="grid.html">Grids</a>
						        </li>
						        <li>
						            <a href="fontawesome.html">FontAwesome</a>
						        </li>
						        <li>
						            <a href="typo.html">Typography</a>
						        </li>
						    </ul>
						</li>

						*/?>

					<!--

					</ul>

				    -->


	            </div>
	            
	            <div class="header__tool">

	            	<?= PHPTheme::widget('layoutNotifications', $notifications);?>

	            	<?= PHPTheme::widget('layoutOptionsMenu', $optionsMenu);?>
	                
	                <!-- pad account begin -->

	                <div class="account-wrap">
	                    <div class="account-item account-item--style2 clearfix js-item-menu">
	                        <div class="image">
	                            <img src="<?= $userAvatar;?>" alt="<?= $userName;;?>" />		                     
	                        </div>
	                        <div class="content">
	                            <a class="js-acc-btn" href="#"><?= $userName;?></a>
	                        </div>
	                        <div class="account-dropdown js-dropdown">
	                            <div class="info clearfix">
	                                <div class="image">
	                                    <a href="#">
	                                        <img src="<?= $userAvatar;?>" alt="<?= $userName;?>" />
	                                    </a>
	                                </div>
	                                <div class="content">
	                                    <h5 class="name">
	                                        <a href="#"><?= $userName;?></a>
	                                    </h5>
	                                    <span class="email"><?= $userEmail;?></span>
	                                </div>
	                            </div>                   	                            
	                            <div class="account-dropdown__footer">
	                                <a href="<?= $logoutUrl;?>">
	                                    <i class="zmdi zmdi-power"></i><?= PHPTheme::t('Logout');?>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- pad account end -->
	            </div>
	        </div>
	    </div>
	</header>
	<!-- END HEADER DESKTOP-->

	<!-- HEADER MOBILE-->
	<header class="header-mobile header-mobile-2 d-block d-lg-none">
	    <div class="header-mobile__bar">
	        <div class="container-fluid">
	            <div class="header-mobile-inner">
	                
	                <?php

                    /*

	                <a class="logo" href="index.html">
	                    <img src="<?= admin_theme_url();?>/images/icon/logo-white.png" alt="CoolAdmin" />
	                </a>
					
                    */

                    ?>

	                <button class="hamburger hamburger--slider" type="button">
	                    <span class="hamburger-box">
	                        <span class="hamburger-inner"></span>
	                    </span>
	                </button>
	            </div>
	        </div>
	    </div>
	    <nav class="navbar-mobile">
	        <div class="container-fluid">
                <?= PHPTheme::widget('layoutMainMenu', $mainMenu);?>	      
	        </div>
	    </nav>
	</header>
	<div class="sub-header-mobile-2 d-block d-lg-none">

	    <div class="header__tool" style="position: relative;">

	    	<div style="position: absolute; left: -10px;" class="d-block t-lg-none">

	    	<?= PHPTheme::widget('layoutActionMenu', $actionMenu);?>

			</div>

	    	<!--
	        <div class="header-button-item has-noti js-item-menu">
	            <i class="zmdi zmdi-notifications"></i>
	            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
	                <div class="notifi__title">
	                    <p>You have 3 Notifications</p>
	                </div>
	                <div class="notifi__item">
	                    <div class="bg-c1 img-cir img-40">
	                        <i class="zmdi zmdi-email-open"></i>
	                    </div>
	                    <div class="content">
	                        <p>You got a email notification</p>
	                        <span class="date">April 12, 2018 06:50</span>
	                    </div>
	                </div>
	                <div class="notifi__item">
	                    <div class="bg-c2 img-cir img-40">
	                        <i class="zmdi zmdi-account-box"></i>
	                    </div>
	                    <div class="content">
	                        <p>Your account has been blocked</p>
	                        <span class="date">April 12, 2018 06:50</span>
	                    </div>
	                </div>
	                <div class="notifi__item">
	                    <div class="bg-c3 img-cir img-40">
	                        <i class="zmdi zmdi-file-text"></i>
	                    </div>
	                    <div class="content">
	                        <p>You got a new file</p>
	                        <span class="date">April 12, 2018 06:50</span>
	                    </div>
	                </div>
	                <div class="notifi__footer">
	                    <a href="#">All notifications</a>
	                </div>
	            </div>
	        </div>
		    -->
	        
			<?= PHPTheme::widget('layoutOptionsMenu', $optionsMenu);?>

	        <!-- mobile account begin -->
	        <div class="account-wrap">
	            <div class="account-item account-item--style2 clearfix js-item-menu">
	                <div class="image">
	                    <img src="<?= $userAvatar;?>" alt="<?= $userName;?>" />
	                </div>
	                <div class="content">
	                    <a class="js-acc-btn" href="#"><?= $userName;?></a>
	                </div>
	                <div class="account-dropdown js-dropdown">
	                    <div class="info clearfix">
	                        <div class="image">
	                            <!--<a href="#">-->
	                                <img src="<?= $userAvatar;?>" alt="<?= $userName;?>" />
	                            <!--</a>-->
	                        </div>
	                        <div class="content">
	                            <h5 class="name">
	                                <a href="#"><?= $userName;?></a>
	                            </h5>
	                            <span class="email"><?= $userEmail;?></span>
	                        </div>
	                    </div>
	                    <div class="account-dropdown__footer">
	                        <a href="<?= $logoutUrl;?>"><i class="zmdi zmdi-power"></i><?= PHPTheme::t('Logout');?></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- mobile account end -->
	    </div>
	</div>
	<!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?= PHPTheme::widget('layoutBreadcrumbs', $breadcrumbs);?>                     
                        <?= $content;?>                   
                    </div>
                </div>
            </div>
        </section>
		<!-- COPYRIGHT-->
		<section class="p-t-60 p-b-20">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="copyright">
		                    <p><?= $copyright;?><br>Template by <a target="_blank" href="https://colorlib.com">Colorlib</a></p>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- END COPYRIGHT-->
    </div>
</div>
<!-- Main JS-->
<script src="<?= PHPTheme::url('js/main.js');?>"></script>
<?php PHPTheme::pageBodyEnd();?>
</body>
</html>
<!-- end document-->