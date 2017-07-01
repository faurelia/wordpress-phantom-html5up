<?php

class Social_Links_Widget extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'social_links_widget',
            'description' => __('Add your social media pages', 'html5phantom'),
        );
        parent::__construct( 'my_widget', __('Phantom: Social Links', 'html5phantom'), $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        $social_link_id = get_theme_mod('phantom_social_link_id');

        // set default links
        if (! array_filter($social_link_id)) {
            $social_link_id = array(
                'twitter'   => 'https://twitter.com',
                'facebook'  => 'https://facebook.com',
                'instagram' => 'https://instagram.com',
                'google'    => 'https://plug.google.com',
                'linkedin'    => 'https://linkedin.com',
                'phone'     => '+1234567890',
                'email'     => 'example@domain.com',
                'rss'       => '#',
            );
        }

        echo '<ul class="icons">';

        if ( $social_link_id['twitter'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-twitter"><span class="label">%2$s</span></a></li>', $social_link_id['twitter'], __('Twitter', 'html5phantom'));
        }

        if ( $social_link_id['facebook'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-facebook"><span class="label">%2$s</span></a></li>', $social_link_id['facebook'], __('Facebook', 'html5phantom'));
        }

        if ( $social_link_id['youtube'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-youtube-play"><span class="label">%2$s</span></a></li>', $social_link_id['youtube'], __('YouTube', 'html5phantom'));
        }

        if ( $social_link_id['instagram'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-instagram"><span class="label">%2$s</span></a></li>', $social_link_id['instagram'], __('Instagram', 'html5phantom'));
        }

        if ( $social_link_id['google'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-google-plus"><span class="label">%2$s</span></a></li>', $social_link_id['google'], __('Google Plus', 'html5phantom'));
        }

        if ( $social_link_id['dribbble'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-dribbble"><span class="label">%2$s</span></a></li>', $social_link_id['dribbble'], __('Dribbble', 'html5phantom'));
        }

        if ( $social_link_id['github'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-github"><span class="label">%2$s</span></a></li>', $social_link_id['github'], __('GitHub', 'html5phantom'));
        }

        if ( $social_link_id['500px'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-500px"><span class="label">%2$s</span></a></li>', $social_link_id['500px'], __('500px', 'html5phantom'));
        }

        if ( $social_link_id['behance'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-behance"><span class="label">%2$s</span></a></li>', $social_link_id['behance'], __('behance', 'html5phantom'));
        }

        if ( $social_link_id['linkedin'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-linkedin"><span class="label">%2$s</span></a></li>', $social_link_id['linkedin'], __('LinkedIn', 'html5phantom'));
        }

        if ( $social_link_id['phone'] ) {
            printf('<li><a href="tel:%1$s" target="_blank" class="icon style2 fa-phone"><span class="label">%2$s</span></a></li>', $social_link_id['phone'], __('Phone', 'html5phantom'));
        }

        if ( $social_link_id['email'] ) {
            printf('<li><a href="mailto:%1$s" target="_blank" class="icon style2 fa-envelope-o"><span class="label">%2$s</span></a></li>', $social_link_id['email'], __('Email ID', 'html5phantom'));
        }

        if ( $social_link_id['rss'] ) {
            printf('<li><a href="%1$s" target="_blank" class="icon style2 fa-rss"><span class="label">%2$s</span></a></li>', $social_link_id['rss'], __('RSS Feed', 'html5phantom'));
        }

        echo '</ul>';

        echo $args['after_widget'];
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow', 'html5phantom' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'html5phantom' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }
}