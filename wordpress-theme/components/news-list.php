<?php
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
?>

<ul>
  <?php foreach ($NEWS_LIST_ITEMS as $ITEM) : ?>
    <li class="border-b border-gray-400 border-dotted">
      <a href="<?php echo $ITEM['link']; ?>" class="flex items-center py-3 hover:opacity-50">
        <span class="w-24"><?php echo $ITEM['date']; ?></span>
        <span class="w-24 px-2 py-1 text-center text-xs text-white bg-gray-600 rounded"><?php echo $ITEM['category']; ?></span>
        <span class="ml-4"><?php echo $ITEM['title']; ?></span>
      </a>
    </li>
  <?php endforeach; ?>
</ul>