<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
  // TODO: サムネイル画像のURLを引数で渡してみる
  // https://www-creators.com/archives/472
  $HERO_ITEM = array(
    'title' => get_the_title(),
    'text' => 'ホテルページ',
  );
  GET_HTML_HERO($HERO_ITEM);
?>
<div class="px-2 py-8">
  <main class="container mx-auto">
    <div class="flex">
      <div class="w-2/3 pr-6">
        <div class="test">投稿ページ</div>
        <?php
          // $test = get_the_terms(get_the_ID(), 'country');
          // var_dump($test);
          the_terms(get_the_ID(), 'country');
        ?>
        <time>
          <?php echo get_the_date(); ?>
          <?php echo get_the_time(); ?>
        </time>
        <?php if (has_tag()) : ?>
          <div>
            <?php the_tags('<span>', '</span>、<span>', '</span>'); ?>
          </div>
        <?php endif; ?>
        <div>
          <?php the_category(','); ?>
        </div>
        <p><?php the_author(); ?></p>
        <!-- <p><?php the_author_link(); ?></p> -->
        <p><?php the_author_posts_link(); ?></p>
        <?php
          $AUTHOR_ITEM = array(
            'href' => get_author_posts_url($post->post_author),
            'name' => get_the_author_meta('nickname'),
            'text' => get_the_author_meta('description'),
            'thumb' => 'https://picsum.photos/id/238/400/400',
          );
          GET_HTML_AUTHOR($AUTHOR_ITEM);
        ?>
        <?php
          $prev_next = get_prev_next_posts();
          GET_HTML_NEWS_PAGINATION($prev_next[0], $prev_next[1]);
        ?>
        <div><a href="<?php echo get_category_link_by_slug('test') ?>">テスト一覧</a></div>
        <div><a href="<?php echo get_category_link_by_slug('uncategorized') ?>">未分類一覧</a></div>
        <?php if (has_post_thumbnail()) : ?>
          <?php
            the_post_thumbnail(
              'square',
              array(
                'class' => 'test',
                'alt' => 'テスト',
                'id' => 'test-id'
              ),
            );
            $thumbnail_url = get_the_post_thumbnail_url();
            echo '実験' . $thumbnail_url;
          ?>
          <p><?php the_post_thumbnail_url(); ?></p>
        <?php else : ?>
          <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sample.jpg" alt=""></p>
        <?php endif; ?>
        <?php the_content(); ?>
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

<?php endwhile; else : ?>
  <!-- TODO: この記述の必要性聞いてみる。404ページ作れば問題ない？ -->
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>

<?php get_footer();