<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => 'トップページ',
    'text' => 'サブタイトル',
  );
  GET_HTML_HERO($HERO_ITEM);
?>

<div class="px-2 py-8">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <ul>
            <?php
              while (have_posts()) : the_post();
              $categories = get_the_category();
              $news_list_item = array(
                'href' => get_permalink(),
                'date' => get_the_date(),
                'category' => $categories[0]->cat_name,
                'title' => get_the_title(),
                'description' => get_the_excerpt(),
                'thumb' => get_the_post_thumbnail_url(),
              );
              // var_dump($news_list_item);
              // GET_HTML_NEWS_LIST_ITEM($news_list_item);
              GET_HTML_PRODUCT_LIST_ITEM($news_list_item);
            ?>
              <!-- <li class="border-b border-gray-400 border-dotted">
                <a href="<?php the_permalink(); ?>" class="flex items-center py-3 hover:opacity-50">
                  <span class="w-24"><?php the_date(); ?></span>
                  <span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded"><?php echo $categories[0]->cat_name; ?></span>
                  <span class="ml-4"><?php the_title(); ?></span>
                </a>
              </li> -->
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <!-- TODO: この記述の必要性聞いてみる。404ページ作れば問題ない？ -->
          <h2>投稿が見つかりませんでした。</h2>
        <?php endif; ?>

        <?php get_template_part('partials/sub'); ?>

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

<?php get_footer();