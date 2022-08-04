<?php

// スラッグ名からカテゴリー一覧ページのリンクを取得
function get_category_link_by_slug($SLUG) {
  $cat = get_category_by_slug($SLUG);
  $cat_id = $cat -> term_id;
  $cat_link = get_category_link($cat_id);
  return esc_url($cat_link);
}