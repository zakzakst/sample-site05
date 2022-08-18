<?php
  $args = array(
    'post_type' => 'hotel',
    'posts_per_page' => 1,
  );
  $new_query = new WP_Query($args);
  if ($new_query->have_posts()) : while($new_query->have_posts()) : $new_query->the_post();
?>
  <p>HOTEL:<?php the_title(); ?></p>
<?php
  endwhile;
  wp_reset_postdata();
  else :
?>
  <p>投稿はありません。</p>
<?php
  endif;
?>