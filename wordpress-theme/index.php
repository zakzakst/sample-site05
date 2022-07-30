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
        <div>コンテンツ</div>
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