<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head() ?>
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/noscript.css" /></noscript>
</head>
<body <?php body_class('is-preload') ?>>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url()) ?>" class="logo">
                <span class="symbol"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="<?php bloginfo('name') ?>" /></span><span class="title"><?php bloginfo('name') ?></span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu"><?php _e('Menu', 'html5phantom') ?></a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2><?php _e('Menu', 'html5phantom') ?></h2>

        <?php if (has_nav_menu('main-menu')):
            wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'depth'          => 1,
                'container'      => false,
            ));
        else: ?>
            <ul>
                <li><a href="<?php echo site_url() ?>"><?php _e('Home', 'html5phantom') ?></a></li>
                <li><a href="<?php echo site_url() ?>"><?php _e('Elements', 'html5phantom') ?></a></li>
                <li><a href="<?php echo site_url() ?>"><?php _e('About', 'html5phantom') ?></a></li>
                <li><a href="<?php echo site_url() ?>"><?php _e('Contact', 'html5phantom') ?></a></li>
            </ul>

            <div style="letter-spacing: 1px;">
                <h3><?php _e('Theme Notice', 'html5phantom') ?></h3>
                <p><?php _e('This is a sample menu. To change, follow the instructions below :', 'html5phantom') ?></p>
                <ol>
                    <li><?php _e('Go to Appearance &raquo; Menus', 'html5phantom') ?></li>
                    <li><?php _e('Assign menu to [ Main Menu ]', 'html5phantom') ?></li>
                </ol>
            </div>
        <?php endif; ?>
    </nav>