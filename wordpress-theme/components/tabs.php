<?php
$TABS = array(
  array(
    'name' => '2022',
    'href' => '#',
    'active' => true,
  ),
  array(
    'name' => '2021',
    'href' => '#',
    'active' => false,
  ),
  array(
    'name' => '2020',
    'href' => '#',
    'active' => false,
  ),
);
?>

<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200">
  <?php foreach ($TABS as $index => $TAB) : ?>
    <?php if ($index == count($TABS) - 1): ?>
      <li>
    <?php else: ?>
      <li class="mr-2">
    <?php endif ?>
      <?php if ($TAB['active']): ?>
        <span class="inline-block p-4 text-blue-600 bg-gray-200 rounded-t-lg"><?php echo $TAB['name']; ?></span>
      <?php else: ?>
        <a href="<?php echo $TAB['href']; ?>" class="inline-block p-4 text-blue-600 bg-gray-200 rounded-t-lg hover:text-gray-600 hover:bg-gray-100"><?php echo $TAB['name']; ?></a>
      <?php endif ?>
    </li>
  <?php endforeach; ?>
</ul>