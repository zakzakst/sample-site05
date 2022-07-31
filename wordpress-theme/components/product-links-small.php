<?php
$PRODUCT_LINKS = array(
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

<ul class="grid grid-cols-4 gap-2">
  <?php foreach ($PRODUCT_LINKS as $LINK) : ?>
    <li class="bg-white rounded-lg border border-gray-200 shadow-md">
      <a href="<?php echo $LINK['href']; ?>">
        <img class="rounded-t-lg" src="<?php echo $LINK['thumb']; ?>" alt="" />
      </a>
      <div class="p-5">
        <a href="<?php echo $LINK['href']; ?>">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $LINK['name']; ?></h5>
        </a>
        <a href="<?php echo $LINK['href']; ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          詳細を見る
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </li>
  <?php endforeach; ?>
</ul>