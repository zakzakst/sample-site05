<?php
require_once get_theme_file_path( '/functions/components.php' );
require_once get_theme_file_path( '/functions/files.php' );
require_once get_theme_file_path( '/functions/menu.php' );
require_once get_theme_file_path( '/functions/post-type.php' );
require_once get_theme_file_path( '/functions/short-codes.php' );
require_once get_theme_file_path( '/functions/theme-supports.php' );
require_once get_theme_file_path( '/functions/title-tag.php' );
require_once get_theme_file_path( '/functions/utilities.php' );
require_once get_theme_file_path( '/functions/widget.php' );

function description() {
  global $post;
  $term = get_post_meta($post->ID, 'description', true);
  if ($term) {
    printf('<meta name="description" content="%s">', esc_html($term));
  } else {
    printf('<meta name="description" content="%s">', esc_html($post->post_excerpt));
  }
}
add_action('wp_head', 'description');

function custom_css() {
  global $post;
  $term = get_post_meta($post->ID, 'customcss', true);
  if ($term) {
    echo '<style>';
    echo esc_html($term);
    echo '</style>';
  }
}
add_action('wp_head', 'custom_css');