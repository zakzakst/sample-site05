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

<ul>
  <?php foreach ($PRODUCT_LINKS as $index => $LINK) : ?>
    <?php if ($index == 0): ?>
      <li>
    <?php else: ?>
      <li class="mt-2">
    <?php endif ?>
      <a href="<?php echo $LINK['href']; ?>" class="flex flex-row items-center bg-white rounded-lg border shadow-md hover:bg-gray-100">
        <img class="object-cover w-48 rounded-l-lg" src="<?php echo $LINK['thumb']; ?>" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $LINK['name']; ?></h5>
          <p class="mb-3 font-normal text-gray-700"><?php echo $LINK['description']; ?></p>
        </div>
      </a>
    </li>
  <?php endforeach; ?>
</ul>