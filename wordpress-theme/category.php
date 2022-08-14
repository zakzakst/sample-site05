<?php get_header(); ?>

<?php
  $HERO_ITEM = array(
    'title' => get_the_archive_title(),
    'text' => 'カテゴリー一覧',
  );
  GET_HTML_HERO($HERO_ITEM);
?>

<div class="px-2 py-8">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_title(); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">リンク</a>
        <?php endwhile; else : ?>
          <!-- TODO: この記述の必要性聞いてみる。404ページ作れば問題ない？ -->
          <h2>投稿が見つかりません。でした</h2>
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

<?php get_footer();