<?php
$PREV_ITEM = array(
  'title' => '前の記事',
  'href' => '#',
);

$NEXT_ITEM = array(
  'title' => '次の記事',
  'href' => '#',
);
?>

<nav class="block text-center">
  <ul class="inline-flex -space-x-px">
    <?php if ($PREV_ITEM): ?>
      <li>
        <a href="<?php echo $PREV_ITEM['href']; ?>" class="inline-block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $PREV_ITEM['title']; ?></a>
      </li>
    <?php endif ?>
    <?php if ($NEXT_ITEM): ?>
      <li>
        <a href="<?php echo $NEXT_ITEM['href']; ?>" class="inline-block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $NEXT_ITEM['title']; ?></a>
      </li>
    <?php endif ?>
  </ul>
</nav>