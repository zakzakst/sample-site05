<?php

function theme_setup() {
  // タイトルタグ挿入
  add_theme_support( 'title-tag' );
  // アイキャッチ画像に対応させる
  add_theme_support( 'post-thumbnails' );
  // 画像のカスタムサイズ設定
  add_image_size('square', 200, 200, true);
  // RSSフィード
  add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'theme_setup');