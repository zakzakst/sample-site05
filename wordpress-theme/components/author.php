<?php
$ITEM = array(
  'name' => '名前',
  'text' => '紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。紹介文が入ります。',
  'thumb' => 'https://picsum.photos/id/238/400/400',
);
?>

<div class="flex p-4 rounded-lg bg-gray-200 space-x-4">
  <div class="flex-shrink-0">
    <img class="w-16 h-16 rounded-full" src="<?php echo $ITEM['thumb']; ?>" alt="<?php echo $ITEM['name']; ?>の写真">
  </div>
  <div class="flex-1 min-w-0">
    <p class="text-sm font-medium text-gray-900"><?php echo $ITEM['name']; ?></p>
    <p class="text-sm text-gray-500"><?php echo $ITEM['text']; ?></p>
  </div>
</div>