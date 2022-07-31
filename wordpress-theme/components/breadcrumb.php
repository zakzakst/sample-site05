<?php
$BREADCRUMB_ITEMS = array(
  array(
    'name' => 'HOME',
    'href' => '#',
    'current' => false,
  ),
  array(
    'name' => 'よくあるご質問',
    'href' => '#',
    'current' => false,
  ),
  array(
    'name' => 'よくあるご質問',
    'href' => '#',
    'current' => true,
  ),
);
?>

<nav class="flex">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <?php foreach ($BREADCRUMB_ITEMS as $index => $ITEM) : ?>
      <li class="inline-flex items-center">
        <?php if ($index == 0): ?>
          <a href="<?php echo $ITEM['href']; ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
            <i class="fas fa-home mr-2"></i>
            <?php echo $ITEM['name']; ?>
          </a>
        <?php // elseif ($index == count($BREADCRUMB_ITEMS) - 1): ?>
        <?php elseif ($ITEM['current']): ?>
          <span class="inline-flex items-center text-sm font-medium text-gray-500">
            <i class="fas fa-angle-right mr-2"></i>
            <?php echo $ITEM['name']; ?>
          </span>
        <?php else: ?>
          <a href="<?php echo $ITEM['href']; ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
            <i class="fas fa-angle-right mr-2"></i>
            <?php echo $ITEM['name']; ?>
          </a>
        <?php endif ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>