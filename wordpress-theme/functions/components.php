<?php
// 著者
function GET_HTML_AUTHOR($ITEM) {
  $markup =
    '<a href="' . $ITEM['href'] . '" class="flex p-4 rounded-lg bg-gray-200 space-x-4">' .
      '<div class="flex-shrink-0">' .
        '<img class="w-16 h-16 rounded-full" src="' . $ITEM['thumb'] . '" alt="' . $ITEM['name'] . 'の写真">' .
      '</div>' .
      '<div class="flex-1 min-w-0">' .
        '<p class="text-sm font-medium text-gray-900">' . $ITEM['name'] . '</p>' .
        '<p class="text-sm text-gray-500">' . $ITEM['text'] . '</p>' .
      '</div>' .
    '</a>';
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

// ニュースリスト
function GET_HTML_NEWS_LIST($ITEMS) {
  $items_html_arr = array_map(function($ITEM) {
    $item_html =
      '<li class="border-b border-gray-400 border-dotted">' .
        '<a href="' . $ITEM['link'] . '" class="flex items-center py-3 hover:opacity-50">' .
          '<span class="w-24">' . $ITEM['date'] . '</span>' .
          '<span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded">' . $ITEM['category'] . '</span>' .
          '<span class="ml-4">' . $ITEM['title'] . '</span>' .
        '</a>' .
      '</li>';
    return $item_html;
  }, $ITEMS);
  $items_html = implode($items_html_arr);
  $markup =
    '<ul>' .
      $items_html .
    '</ul>';
  echo $markup;
}

// ニュースリスト項目
function GET_HTML_NEWS_LIST_ITEM($ITEM) {
  // var_dump($ITEM);
  $markup =
    '<li class="border-b border-gray-400 border-dotted">' .
      '<a href="' . $ITEM['href'] . '" class="flex items-center py-3 hover:opacity-50">' .
        '<span class="w-24">' . $ITEM['date'] . '</span>' .
        '<span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded">' . $ITEM['category'] . '</span>' .
        '<span class="ml-4">' . $ITEM['title'] . '</span>' .
      '</a>' .
    '</li>';
  echo $markup;
}

// ニュースページネーション
function GET_HTML_NEWS_PAGINATION($PREV_ITEM, $NEXT_ITEM) {
  $prev_item_html = '';
  $next_item_html = '';
  if ($PREV_ITEM) {
    $prev_item_html =
      '<li>' .
        '<a href="' . $PREV_ITEM['href'] . '" class="inline-block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">' .
          $PREV_ITEM['title'] .
        '</a>' .
      '</li>';
  }
  if ($NEXT_ITEM) {
    $next_item_html =
      '<li>' .
        '<a href="' . $NEXT_ITEM['href'] . '" class="inline-block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">' .
          $NEXT_ITEM['title'] .
        '</a>' .
      '</li>';
  }
  $markup =
    '<nav class="block text-center">' .
      '<ul class="inline-flex -space-x-px">' .
        $prev_item_html .
        $next_item_html .
      '</ul>' .
    '</nav>';
  echo $markup;
}

// 製品リスト
function GET_HTML_PRODUCT_LIST($ITEMS) {
  $items_html_arr = array_map(function($ITEM, $index) {
    $item_class = 'mt-2';
    if ($index == 0) {
      $item_class = '';
    }
    $item_html =
      '<li class="' . $item_class . '">' .
        '<a href="' . $ITEM['href'] . '" class="flex flex-row items-center bg-white rounded-lg border shadow-md hover:bg-gray-100">' .
          '<img class="object-cover w-48 rounded-l-lg" src="' . $ITEM['thumb'] . '" alt="">' .
          '<div class="flex flex-col justify-between p-4 leading-normal">' .
            '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">' . $ITEM['name'] . '</h5>' .
            '<p class="mb-3 font-normal text-gray-700">' . $ITEM['description'] . '</p>' .
          '</div>' .
        '</a>' .
      '</li>';
    return $item_html;
  }, $ITEMS, array_keys($ITEMS));
  $items_html = implode($items_html_arr);
  $markup =
    '<ul>' .
      $items_html .
    '</ul>';
  echo $markup;
}

// 製品リスト項目
function GET_HTML_PRODUCT_LIST_ITEM($ITEM) {
  $markup =
    '<li class="mt-2">' .
      '<a href="' . $ITEM['href'] . '" class="flex flex-row items-center bg-white rounded-lg border shadow-md hover:bg-gray-100">' .
        '<img class="object-cover w-48 rounded-l-lg" src="' . $ITEM['thumb'] . '" alt="">' .
        '<div class="flex flex-col justify-between p-4 leading-normal">' .
          '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">' . $ITEM['title'] . '</h5>' .
          '<p class="mb-3 font-normal text-gray-700">' . $ITEM['description'] . '</p>' .
        '</div>' .
      '</a>' .
    '</li>';
  echo $markup;
}

// 製品リスト（小）
function GET_HTML_PRODUCT_LIST_SMALL($ITEMS) {
  $items_html_arr = array_map(function($ITEM) {
    $item_html =
      '<li class="bg-white rounded-lg border border-gray-200 shadow-md">' .
        '<a href="' . $ITEM['href'] . '">' .
          '<img class="rounded-t-lg" src="' . $ITEM['thumb'] . '" alt="" />' .
        '</a>' .
        '<div class="p-5">' .
          '<a href="' . $ITEM['href'] . '">' .
            '<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">' . $ITEM['name'] . '</h5>' .
          '</a>' .
          '<a href="' . $ITEM['href'] . '" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">' .
            '詳細を見る' .
            '<i class="fas fa-arrow-right ml-2"></i>' .
          '</a>' .
        '</div>' .
      '</li>';
    return $item_html;
  }, $ITEMS);
  $items_html = implode($items_html_arr);
  $markup =
    '<ul class="grid grid-cols-4 gap-2">' .
      $items_html .
    '</ul>';
  echo $markup;
}