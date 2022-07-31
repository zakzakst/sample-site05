<?php get_header(); ?>

<!-- ▼▼▼ ページ内容 ▼▼▼ -->
<?php
  $title = 'タイトル';
  $subTitle = 'サブタイトル';
  include('components/hero.php');
?>
<div class="px-2 py-8">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php include('components/table.php'); ?>
            <?php include('components/author.php'); ?>
            <?php include('components/breadcrumb.php'); ?>
            <?php include('components/tabs.php'); ?>
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