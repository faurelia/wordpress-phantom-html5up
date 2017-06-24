<?php

add_action('customize_register','social_media_customize_register');
function social_media_customize_register( $wp_customize ) {

    $wp_customize->add_section(
        'social_media_links',
        array(
            'title' => 'Social Links',
            'description' => 'Add social media links on the footer. Leave the field black to hide the icons.',
            'priority' => 35,
        )
    );

    $wp_customize->add_setting( 'sm_facebook', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://facebook.com'));
    $wp_customize->add_setting( 'sm_youtube', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://youtube.com'));
    $wp_customize->add_setting( 'sm_twitter', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://twitter.com'));
    $wp_customize->add_setting( 'sm_instagram', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://instagram.com'));
    $wp_customize->add_setting( 'sm_google', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://plus.google.com'));
    $wp_customize->add_setting( 'sm_dribbble', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://dribbble.com'));
    $wp_customize->add_setting( 'sm_github', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://github.com'));
    $wp_customize->add_setting( 'sm_500px', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://500px.com'));
    $wp_customize->add_setting( 'sm_behance', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://behance.net'));
    $wp_customize->add_setting( 'sm_linked_in', array('sanitize_callback' => 'wp_kses_post', 'default' => 'https://linkedin.com'));
    $wp_customize->add_setting( 'sm_mobile', array('sanitize_callback' => 'wp_kses_post', 'default' => '+1 23 456 7890'));
    $wp_customize->add_setting( 'sm_email', array('sanitize_callback' => 'wp_kses_post', 'default' => 'example@domain.com'));
    $wp_customize->add_setting( 'sm_rss_feed', array('sanitize_callback' => 'wp_kses_post', 'default' => ''));

    $wp_customize->add_control( 'sm_facebook', array(
        'label' => 'Facebook URL',
        'section' => 'social_media_links',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://facebook.com')
    ));
    $wp_customize->add_control( 'sm_youtube', array(
        'label' => 'Youtube URL',
        'section' => 'social_media_links',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://youtube.com')
    ));
    $wp_customize->add_control( 'sm_twitter', array(
        'label' => 'Twitter URL',
        'section' => 'social_media_links',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://twitter.com')
    ));
    $wp_customize->add_control( 'sm_instagram', array(
        'label' => 'Instagram URL',
        'section' => 'social_media_links',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://instagram.com')
    ));
    $wp_customize->add_control( 'sm_google', array(
        'label' => 'Google+ URL',
        'section' => 'social_media_links',
        'type' => 'url',
        'input_attrs' => array('placeholder' => 'https://plus.google.com')
    ));
    $wp_customize->add_control( 'sm_dribbble', array(
        'label' => 'Dribbble URL',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://dribbble.com')
    ));
    $wp_customize->add_control( 'sm_github', array(
        'label' => 'Github URL',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://github.com')
    ));
    $wp_customize->add_control( 'sm_500px', array(
        'label' => '500px URL',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://500px.com')
    ));
    $wp_customize->add_control( 'sm_behance', array(
        'label' => 'Behance URL',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://behance.net')
    ));
    $wp_customize->add_control( 'sm_linked_in', array(
        'label' => 'LinkedIn URL',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'https://linkedin.com')
    ));
    $wp_customize->add_control( 'sm_mobile', array(
        'label' => 'Mobile No.',
        'section' => 'social_media_links',
        'type' => 'tel',
        'input_attrs' => array('placeholder' => '+1 23 456 7890')
    ));
    $wp_customize->add_control( 'sm_email', array(
        'label' => 'Email ID',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => 'example@domain.com')
    ));
    $wp_customize->add_control( 'sm_rss_feed', array(
        'label' => 'RSS Feed',
        'section' => 'social_media_links',
        'type' => 'text',
        'input_attrs' => array('placeholder' => '')
    ));
}



add_action('customize_register','other_settings_customize_register');
function other_settings_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'other_theme_settings',
        array(
            'title' => 'Other Settings',
        )
    );

    $wp_customize->add_setting( 'setting_cta_heading', array('sanitize_callback' => 'wp_kses_post', 'default' => 'This is Phantom, a free, fully responsive site<br>template designed by <a href="http://html5up.net">HTML5 UP</a>.'));
    $wp_customize->add_setting( 'setting_cta_description', array('sanitize_callback' => 'wp_kses_post', 'default' => 'Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.'));
    $wp_customize->add_setting( 'setting_copyright', array('sanitize_callback' => 'wp_kses_post', 'default' => '© %s. All rights reserved.'));

    $wp_customize->add_control( 'setting_cta_heading', array(
        'label' => 'Homepage heading',
        'section' => 'other_theme_settings',
        'type' => 'text',
    ));

    $wp_customize->add_control( 'setting_cta_description', array(
        'label' => 'Homepage description',
        'section' => 'other_theme_settings',
        'type' => 'textarea',
    ));

    $wp_customize->add_control( 'setting_copyright', array(
        'label' => 'Copyright text',
        'section' => 'other_theme_settings',
        'type' => 'text',
    ));
}