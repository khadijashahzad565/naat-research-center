<?php

echo "<!-- functions.php is working -->";

// Theme setup: register menu
add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary-menu' => __('Top Menu', 'nrc')
    ]);
});

// Bootstrap navwalker file include
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Load Bootstrap + custom styles
add_action('wp_enqueue_scripts', function () {
    $uri  = get_template_directory_uri();
    $dir  = get_template_directory();

    // Always load Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // Always load header CSS
    wp_enqueue_style(
        'nrc-header-style',
        "$uri/assets/css/header.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/header.css"),
        'all'
    );

    // Load index.css only on front page
    if (is_front_page() || is_home()) {
        wp_enqueue_style(
            'nrc-index-style',
            "$uri/assets/css/index.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/index.css"),
            'all'
        );
    }
// Load about.css only on about page template
if (is_page_template('about.php')) {
    wp_enqueue_style(
        'nrc-about-style',
        "$uri/assets/css/about.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/about.css"),
        'all'
    );
}


    // Load articles.css only on Articles page template
    if (is_page_template('articles.php')) {
        wp_enqueue_style(
            'nrc-articles-style',
            "$uri/assets/css/articles.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/articles.css"),
            'all'
        );
    }

    // Load authors.css only on Authors page template
    if (is_page_template('authors.php')) {
        wp_enqueue_style(
            'nrc-authors-style',
            "$uri/assets/css/authors.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/authors.css"),
            'all'
        );
    }

    // Load books.css only on books page template
    if (is_page_template('books.php')) {
        wp_enqueue_style(
            'nrc-books-style',
            "$uri/assets/css/books.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/books.css"),
            'all'
        );
    }

    // Load programs.css only on programs page template
    if (is_page_template('programs.php')) {
        wp_enqueue_style(
            'nrc-programs-style',
            "$uri/assets/css/programs.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/programs.css"),
            'all'
        );
    }

    // Load team.css only on team page template
    if (is_page_template('team.php')) {
        wp_enqueue_style(
            'nrc-team-style',
            "$uri/assets/css/team.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/team.css"),
            'all'
        );
    }

    
    // News & Events page
    if (is_page('news-events')) {
        wp_enqueue_style(
            'nrc-news-events-style',
            "$uri/assets/css/page-news-events.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/page-news-events.css"),
            'all'
        );
    }

    // Load contact.css only on contact page template
    if (is_page_template('contact.php')) {
        wp_enqueue_style(
            'nrc-contact-style',
            "$uri/assets/css/contact.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/contact.css"),
            'all'
        );
    }

//  Load testimonials.css on homepage (index.php), blog (home.php), and programs template
if (is_front_page() || is_home() || is_page_template('programs.php')) {
    wp_enqueue_style(
        'nrc-testimonials-style',
        "$uri/assets/css/testimonials.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/testimonials.css"),
        'all'
    );
}


//  Load cta-section.css on About, Authors, and Team page templates
if (is_page_template('about.php') || is_page_template('authors.php') || is_page_template('team.php')) {
    wp_enqueue_style(
        'nrc-cta-section-style',
        "$uri/assets/css/cta-section.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/cta-section.css"),
        'all'
    );
}


    // Always load footer CSS
    wp_enqueue_style(
        'nrc-footer-style',
        "$uri/assets/css/footer.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/footer.css"),
        'all'
    );


});
