<?php
// 著者
function GET_HTML_AUTHOR($ITEM) {
  $markup =
    '<div class="flex p-4 rounded-lg bg-gray-200 space-x-4">' .
      '<div class="flex-shrink-0">' .
        '<img class="w-16 h-16 rounded-full" src="' . $ITEM['thumb'] . '" alt="' . $ITEM['name'] . 'の写真">' .
      '</div>' .
      '<div class="flex-1 min-w-0">' .
        '<p class="text-sm font-medium text-gray-900">' . $ITEM['name'] . '</p>' .
        '<p class="text-sm text-gray-500">' . $ITEM['text'] . '</p>' .
      '</div>' .
    '</div>';
  echo $markup;
}

// パンくず（全体）
function GET_HTML_BREADCRUMB($ITEMS) {
  $items_html_arr = array_map('GET_HTML_BREADCRUMB_ITEM', $ITEMS, array_keys($ITEMS));
  $items_html = implode($items_html_arr);
  $markup =
    '<nav class="flex">' .
      '<ol class="inline-flex items-center space-x-1 md:space-x-3">' .
        $items_html .
      '</ol>' .
    '</nav>';
  echo $markup;
}

// パンくず（要素）
function GET_HTML_BREADCRUMB_ITEM($ITEM, $index) {
  $item_inner = '';
  if ($index == 0) {
    $item_inner =
      '<a href="' . $ITEM['href'] . '" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">' .
        '<i class="fas fa-home mr-2"></i>' .
        $ITEM['name'] .
      '</a>';
  } elseif ($ITEM['current']) {
    $item_inner =
      '<span class="inline-flex items-center text-sm font-medium text-gray-500">' .
        '<i class="fas fa-angle-right mr-2"></i>' .
        $ITEM['name'] .
      '</span>';
  } else {
    $item_inner =
      '<a href="' . $ITEM['href'] . '" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">' .
        '<i class="fas fa-angle-right mr-2"></i>' .
        $ITEM['name'] .
      '</a>';
  }
  $markup =
    '<li class="inline-flex items-center">' .
      $item_inner .
    '</li>';
  return $markup;
}

// ヒーロー
function GET_HTML_HERO($ITEM) {
  $markup =
    '<section class="px-2 py-16 bg-gray-600 text-white">' .
      '<div class="container mx-auto">' .
        '<h1 class="text-3xl">' . $ITEM['title'] . '</h1>' .
        '<p class="mt-2">' . $ITEM['text'] . '</p>' .
      '</div>' .
    '</section>';
  echo $markup;
}

// テーブル（全体）
function GET_HTML_TABLE($ITEM) {
  $head_html = GET_HTML_TABLE_HEAD($ITEM['head_rows']);
  $body_html = GET_HTML_TABLE_BODY($ITEM['body_rows']);
  $markup =
    '<table class="w-full text-sm text-left text-gray-500">' .
      $head_html .
      $body_html .
    '</table>';
  echo $markup;
}

// テーブル（ヘッド）
function GET_HTML_TABLE_HEAD($ROWS) {
  $rows_html_arr = array_map(function($cols) {
    $cols_html_arr = array_map(function($col) {
      return '<th class="py-3 px-6">' . $col . '</th>';
    }, $cols);
    $cols_html = implode($cols_html_arr);
    return
      '<tr>' .
        $cols_html .
      '</tr>';
  }, $ROWS);
  $markup =
    '<thead class="text-xs text-gray-700 bg-gray-100">' .
      implode($rows_html_arr) .
    '</thead>';
  return $markup;
}

// テーブル（ボディー）
function GET_HTML_TABLE_BODY($ROWS) {
  $rows_html_arr = array_map(function($cols) {
    $cols_html_arr = array_map(function($col, $index) {
      if ($index == 0) {
        return '<th class="py-4 px-6 text-gray-900">' . $col . '</th>';
      } else {
        return '<td class="py-4 px-6">' . $col . '</td>';
      }
    }, $cols, array_keys($cols));
    $cols_html = implode($cols_html_arr);
    return
      '<tr class="bg-white border-b">' .
        $cols_html .
      '</tr>';
  }, $ROWS);
  $markup =
    '<tbody>' .
      implode($rows_html_arr) .
    '</tbody>';
  return $markup;
}

// タブ（全体）
function GET_HTML_TABS($ITEMS) {
  $items_html_arr = array_map('GET_HTML_TABS_ITEM', $ITEMS, array_keys($ITEMS));
  $items_html = implode($items_html_arr);
  $markup =
    '<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200">' .
      $items_html .
    '</ul>';
  echo $markup;
}

// タブ（要素）
function GET_HTML_TABS_ITEM($ITEM, $index) {
  $item_inner = '';
  if ($ITEM['active']) {
    $item_inner =
      '<span class="inline-block p-4 text-blue-600 bg-gray-300 rounded-t-lg">' .
        $ITEM['name'] .
      '</span>';
  } else {
    $item_inner =
      '<a href="' . $ITEM['href'] . '" class="inline-block p-4 text-blue-600 bg-gray-200 rounded-t-lg hover:text-gray-600 hover:bg-gray-100">' .
        $ITEM['name'] .
      '</a>';
  }
  $markup = '';
  if ($index == 0) {
    $markup =
      '<li>' .
        $item_inner .
      '</li>';
  } else {
    $markup =
      '<li class="ml-2">' .
        $item_inner .
      '</li>';
  }
  return $markup;
}