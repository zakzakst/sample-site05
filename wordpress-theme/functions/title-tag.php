<?php
// タイトルタグ挿入
add_theme_support( 'title-tag' );

// セパレーターの変更
function wp_document_title_separator( $separator ) {
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_separator', 'wp_document_title_separator' );

// TODO: 下記「document_title_parts」試してみる
// https://tech-dig.jp/get-title/