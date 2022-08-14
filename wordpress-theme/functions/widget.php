<?php

function add_widget_area() {
  register_sidebar(
    array(
      'id' => 'test',
      'name' => 'test',
      'description' => 'test',
    ),
  );
}
add_action('widgets_init', 'add_widget_area');