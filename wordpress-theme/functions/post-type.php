<?php
// TODO: 内容ちゃんと調べる
// https://fundemic.jp/blog/the-tohr-archive/

function post_has_archive($args, $post_type) {
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; //任意のスラッグ名　←アーカイブページを有効に
    $args['label'] = 'TECHブログ'; //管理画面左ナビに「投稿」の代わりに表示される
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_filter('post_type_archive_link', function ($link, $post_type) {
  if ('post' === $post_type) {
    $post_type_object = get_post_type_object('post');
    $slug = $post_type_object -> has_archive;
    $link = get_home_url(null, '/' . $slug . '/');
  }
  return $link;
}, 10, 2);

function add_article_post_permalink($permalink) {
  $permalink = '/blog' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');

function add_article_post_rewrite_rules($post_rewrite) {
  $return_rule = array();
  foreach($post_rewrite as $regex => $rewrite) {
    $return_rule['blog/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');