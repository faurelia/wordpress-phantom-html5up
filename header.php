<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head() ?>
    <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri() ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="<?php echo home_url() ?>" class="logo">
                <span class="symbol"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="<?php echo bloginfo('name') ?>" /></span><span class="title"><?php echo bloginfo('name') ?></span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <?php wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'depth'          => 1,
            'container'      => false,
        ) ); ?>
    </nav>