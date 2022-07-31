<?php
$HEAD_ROWS = array(
  array(
    '項目名', '色', 'カテゴリー', '値段',
  ),
);

$BODY_ROWS = array(
  array(
    '項目1', '色1', 'カテゴリー1', '値段1',
  ),
  array(
    '項目2', '色2', 'カテゴリー2', '値段2',
  ),
  array(
    '項目3', '色3', 'カテゴリー3', '値段3',
  ),
);
?>

<table class="w-full text-sm text-left text-gray-500">
  <thead class="text-xs text-gray-700 bg-gray-100">
    <?php foreach ($HEAD_ROWS as $ROW) : ?>
      <tr>
        <?php foreach ($ROW as $ITEM) : ?>
          <th class="py-3 px-6"><?php echo $ITEM; ?></th>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </thead>
  <tbody>
    <?php foreach ($BODY_ROWS as $ROW) : ?>
      <tr class="bg-white border-b">
        <?php foreach ($ROW as $index => $ITEM) : ?>
          <?php if ($index == 0): ?>
            <th class="py-4 px-6 text-gray-900"><?php echo $ITEM; ?></th>
          <?php else: ?>
            <th class="py-4 px-6"><?php echo $ITEM; ?></th>
          <?php endif ?>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>