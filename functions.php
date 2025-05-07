<?php
function nrc_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => __('Top Menu', 'nrc')
    ));
}
add_action('after_setup_theme', 'nrc_theme_setup');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

