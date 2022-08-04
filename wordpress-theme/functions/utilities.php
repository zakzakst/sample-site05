<?php

// スラッグ名からカテゴリー一覧ページのリンクを取得
function get_category_link_by_slug($SLUG) {
  $cat = get_category_by_slug($SLUG);
  $cat_id = $cat -> term_id;
  $cat_link = get_category_link($cat_id);
  return esc_url($cat_link);
}

// 前後の投稿の情報を取得
function get_prev_next_posts() {
  $prev_post = get_previous_post();
  $prev_item = array();
  if( !empty( $prev_post ) ) {
    $prev_item['href'] = get_permalink( $prev_post -> ID );
    $prev_item['title'] = $prev_post -> post_title;
  }
  $next_post = get_next_post();
  $next_item = array();
  if( !empty( $next_post ) ) {
    $next_item['href'] = get_permalink( $next_post -> ID );
    $next_item['title'] = $next_post -> post_title;
  }
  return array(
    $prev_item,
    $next_item,
  );
}