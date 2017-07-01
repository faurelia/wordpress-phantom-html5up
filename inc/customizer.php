<?php

function sanitize_number($number) {
    return filter_var($number, FILTER_SANITIZE_NUMBER_INT);
}

add_action('customize_register','social_media_customize_register');
function social_media_customize_register( WP_Customize_Manager $wp_customize ) {

    $wp_customize->add_section( 'phantom_social_links', array(
            'title' => __('Social Links', 'html5phantom'),
            'priority' => 35,
    ));

    $setting_args = array('sanitize_callback' => 'esc_url_raw');
    $setting_phone_args = array('sanitize_callback' => 'sanitize_number');
    $setting_email_args = array('sanitize_callback' => 'sanitize_email');

    $wp_customize->add_setting( 'phantom_social_link_id[facebook]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[youtube]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[twitter]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[instagram]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[google]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[dribbble]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[github]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[500px]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[behance]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[linkedin]', $setting_args);
    $wp_customize->add_setting( 'phantom_social_link_id[phone]', $setting_phone_args);
    $wp_customize->add_setting( 'phantom_social_link_id[email]', $setting_email_args);
    $wp_customize->add_setting( 'phantom_social_link_id[rss]', $setting_args);

    $wp_customize->add_control( 'facebook', array(
        'label' => __('Facebook URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[facebook]',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://facebook.com')
    ));
    $wp_customize->add_control( 'youtube', array(
        'label' => __('Youtube URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[youtube]',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://youtube.com')
    ));
    $wp_customize->add_control( 'twitter', array(
        'label' => __('Twitter URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[twitter]',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://twitter.com')
    ));
    $wp_customize->add_control( 'instagram', array(
        'label' => __('Instagram URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[instagram]',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://instagram.com')
    ));
    $wp_customize->add_control( 'google', array(
        'label' => __('Google+ URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[google]',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://plus.google.com')
    ));
    $wp_customize->add_control( 'dribbble', array(
        'label' => __('Dribbble URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[dribbble]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://dribbble.com')
    ));
    $wp_customize->add_control( 'github', array(
        'label' => __('Github URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[github]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://github.com')
    ));
    $wp_customize->add_control( '500px', array(
        'label' => __('500px URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[500px]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://500px.com')
    ));
    $wp_customize->add_control( 'behance', array(
        'label' => __('Behance URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[behance]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://behance.net')
    ));
    $wp_customize->add_control( 'linkedin', array(
        'label' => __('LinkedIn URL', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[linkedin]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://linkedin.com')
    ));
    $wp_customize->add_control( 'phone', array(
        'label' => __('Mobile No.', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[phone]',
        'type' => 'tel',
        'input_attrs' => array('placeholder' => '+1 23 456 7890')
    ));
    $wp_customize->add_control( 'email', array(
        'label' => __('Email ID', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[email]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'example@domain.com')
    ));
    $wp_customize->add_control( 'rss', array(
        'label' => __('RSS Feed', 'html5phantom'),
        'section' => 'phantom_social_links',
        'settings' => 'phantom_social_link_id[rss]',
        'type' => 'text',
        'input_attrs' => array('placeholder' => '')
    ));
}



add_action('customize_register','other_settings_customize_register');
function other_settings_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'other_theme_settings',
        array(
            'title' => __('Theme Options', 'html5phantom'),
        )
    );

    $wp_customize->add_setting( 'setting_cta_heading', array('sanitize_callback' => 'wp_kses_post', 'default' => __('This is Phantom, a free, fully responsive site<br>template designed by <a href="http://html5up.net">HTML5 UP</a>.')));
    $wp_customize->add_setting( 'setting_cta_description', array('sanitize_callback' => 'wp_kses_post', 'default' => __('Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.')));
    $wp_customize->add_setting( 'setting_copyright', array('sanitize_callback' => 'wp_kses_post', 'default' => __('© %s. All rights reserved.')));

    $wp_customize->add_control( 'setting_cta_heading', array(
        'label' => __('Homepage heading', 'html5phantom'),
        'section' => 'other_theme_settings',
        'type' => 'text',
    ));

    $wp_customize->add_control( 'setting_cta_description', array(
        'label' => __('Homepage description', 'html5phantom'),
        'section' => 'other_theme_settings',
        'type' => 'textarea',
    ));

    $wp_customize->add_control( 'setting_copyright', array(
        'label' => __('Copyright text', 'html5phantom'),
        'section' => 'other_theme_settings',
        'type' => 'text',
    ));
}