<?php get_header(); ?>

<!-- ▼▼▼ ページ内容 ▼▼▼ -->
<?php
  // $title = 'タイトル';
  // $subTitle = 'サブタイトル';
  // include('components/hero.php');
  $HERO_ITEM = array(
    'title' => 'タイトル',
    'text' => 'サブタイトル',
  );
  GET_HTML_HERO($HERO_ITEM);

  $AUTHOR_ITEM = array(
    'name' => '名前',
    'text' => '紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。',
    'thumb' => 'https://picsum.photos/id/238/400/400',
  );

  $BREADCRUMB_ITEMS = array(
    array(
      'name' => 'HOME',
      'href' => '#',
      'current' => false,
    ),
    array(
      'name' => 'ページ名',
      'href' => '#',
      'current' => false,
    ),
    array(
      'name' => 'よくあるご質問',
      'href' => '#',
      'current' => true,
    ),
  );

  $TABLE_ITEM = array(
    'head_rows' => array(
      array(
        '項目名', '色', 'カテゴリー', '値段',
      ),
    ),
    'body_rows' => array(
      array(
        '項目1', '色1', 'カテゴリー1', '値段1',
      ),
      array(
        '項目2', '色2', 'カテゴリー2', '値段2',
      ),
      array(
        '項目3', '色3', 'カテゴリー3', '値段3',
      ),
    ),
  );

  $TAB_ITEMS = array(
    array(
      'name' => '2022',
      'href' => '#',
      'active' => true,
    ),
    array(
      'name' => '2021',
      'href' => '#',
      'active' => false,
    ),
    array(
      'name' => '2020',
      'href' => '#',
      'active' => false,
    ),
  );
?>
<div class="px-2 py-8">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php
              // include('components/table.php');
              GET_HTML_TABLE($TABLE_ITEM);
            ?>
            <?php
              // include('components/author.php');
              GET_HTML_AUTHOR($AUTHOR_ITEM);
            ?>
            <?php
              // include('components/breadcrumb.php');
              GET_HTML_BREADCRUMB($BREADCRUMB_ITEMS);
            ?>
            <?php
              // include('components/tabs.php');
              GET_HTML_TABS($TAB_ITEMS);
            ?>
            <?php include('components/news-list.php'); ?>
            <?php include('components/news-pagination.php'); ?>
            <?php include('components/product-links.php'); ?>
            <?php include('components/product-links-small.php'); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <h2>投稿が見つかりません。</h2>
        <?php endif; ?>
      </div>
      <div class="w-1/3 flex-shrink-0">
        <?php include('components/aside.php'); ?>
      </div>
    </div>
    <div class="mt-8">
      <?php include('components/contact.php'); ?>
    </div>
  </main>
</div>
<!-- ▲▲▲ ページ内容 ▲▲▲ -->

<?php get_footer();