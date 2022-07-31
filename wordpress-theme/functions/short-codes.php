<?php
// 大見出し
function SC_HEADING_2($atts) {
  return
    '<h2 class="mb-4 text-2xl font-bold">' .
      $atts['text'] .
    '</h2>';
}
add_shortcode('HEADING_2', 'SC_HEADING_2');

// 小見出し
function SC_HEADING_3($atts) {
  return
    '<h3 class="pb-2 mb-2 text-lg border-b border-gray-400">' .
      $atts['text'] .
    '</h3>';
}
add_shortcode('HEADING_3', 'SC_HEADING_3');

// 引用
function SC_BLOCKQUOTE($atts, $content) {
  return
    '<blockquote class="px-4 py-2 border-l-4 border-gray-200 text-gray-500 text-sm italic">' .
      $content .
    '</blockquote>';
}
add_shortcode('BLOCKQUOTE', 'SC_BLOCKQUOTE');

// 囲み
function SC_BOX($atts, $content) {
  return
    '<div class="p-4 bg-gray-100">' .
      $content .
    '</div>';
}
add_shortcode('BOX', 'SC_BOX');

// リンク
function SC_LINK($atts) {
  // デフォルト値を設定
  $atts = shortcode_atts(array(
    'text' => '',
    'href' => '',
    'type' => '',
  ), $atts);
  if ($atts['type'] == 'external') {
    return
      '<span class="text-blue-500 hover:text-blue-400">' .
        '<a href="' . $atts['href'] . '" class="underline">' . $atts['text'] . '</a>' .
        '<i class="text-sm fas fa-external-link-alt"></i>' .
      '</span>';
  } else {
    return
      '<a href="' . $atts['href'] . '" class="text-blue-500 underline hover:text-blue-400">' .
        $atts['text'] .
      '</a>';
  }
}
add_shortcode('LINK', 'SC_LINK');