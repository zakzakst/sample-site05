<?php

// カスタムメニューの追加
function add_menus() {
  register_nav_menus(
    array(
      'header_links' => 'ヘッダーに表示されるナビゲーション',
      'footer_links' => 'フッターに表示されるナビゲーション',
    ),
  );
}
add_action('after_setup_theme', 'add_menus');

// メニュー項目を取得
// TODO: メニューを階層化して設定するとサブメニューも含めた1階層の配列になる。階層化した配列を取得するには「menu_item_parent」を利用して配列の操作をする必要がありそう
function GET_MENU_ITEMS($SLUG) {
  $result = array();
  if (
    ($locations = get_nav_menu_locations()) &&
    isset($locations[$SLUG])
  ) {
    $menu = wp_get_nav_menu_object($locations[$SLUG]);
    $result = wp_get_nav_menu_items($menu->term_id);
  }
  return $result;
}