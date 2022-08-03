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

  $NEWS_LIST_ITEMS = array(
    array(
      'date' => '2022/07/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/06/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/05/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/04/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/03/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/02/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
    array(
      'date' => '2022/01/01',
      'category' => 'カテゴリー',
      'title' => 'ニュースタイトルが入ります。',
      'link' => '#'
    ),
  );

  $PREV_ITEM = array(
    'title' => '前の記事',
    'href' => '#',
  );
  
  $NEXT_ITEM = array(
    'title' => '次の記事',
    'href' => '#',
  );

  $PRODUCT_LIST_ITEMS = array(
    array(
      'name' => '製品名が入ります',
      'thumb' => 'https://picsum.photos/id/237/400/400',
      'description' => '製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。',
      'href' => '#',
    ),
    array(
      'name' => '製品名が入ります',
      'thumb' => 'https://picsum.photos/id/238/400/400',
      'description' => '製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。',
      'href' => '#',
    ),
    array(
      'name' => '製品名が入ります',
      'thumb' => 'https://picsum.photos/id/239/400/400',
      'description' => '製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。',
      'href' => '#',
    ),
    array(
      'name' => '製品名が入ります',
      'thumb' => 'https://picsum.photos/id/240/400/400',
      'description' => '製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。',
      'href' => '#',
    ),
    array(
      'name' => '製品名が入ります',
      'thumb' => 'https://picsum.photos/id/241/400/400',
      'description' => '製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。製品説明が入ります。',
      'href' => '#',
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
            <?php
              // include('components/news-list.php');
              GET_HTML_NEWS_LIST($NEWS_LIST_ITEMS);
            ?>
            <?php
              // include('components/news-pagination.php');
              GET_HTML_NEWS_PAGINATION($PREV_ITEM, $NEXT_ITEM);
            ?>
            <?php
              // include('components/product-links.php');
              GET_HTML_PRODUCT_LIST($PRODUCT_LIST_ITEMS);
            ?>
            <?php
              // include('components/product-links-small.php');
              GET_HTML_PRODUCT_LIST_SMALL($PRODUCT_LIST_ITEMS);
            ?>
          <?php endwhile; ?>
        <?php else : ?>
          <h2>投稿が見つかりません。</h2>
        <?php endif; ?>
      </div>
      <div class="w-1/3 flex-shrink-0">
        <?php get_sidebar(); ?>
      </div>
    </div>
    <div class="mt-8">
      <?php include('components/contact.php'); ?>
    </div>
  </main>
</div>
<!-- ▲▲▲ ページ内容 ▲▲▲ -->

<?php get_footer();