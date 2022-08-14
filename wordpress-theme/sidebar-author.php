<?php
$ASIDE_ITEMS = array(
  array(
    'heading' => '製品情報',
    'links' => array(
      array(
        'link' => '#',
        'label' => '製品情報トップ',
      ),
      array(
        'link' => '#',
        'label' => '製品詳細',
      ),
      array(
        'link' => '#',
        'label' => '導入のご相談',
      ),
      array(
        'link' => '#',
        'label' => '導入事例',
      ),
    ),
  ),
  array(
    'heading' => 'お知らせ',
    'links' => array(
      array(
        'link' => '#',
        'label' => 'ニュースリリーストップ',
      ),
      array(
        'link' => '#',
        'label' => '月別アーカイブ',
      ),
    ),
  ),
  array(
    'heading' => '会社情報',
    'links' => array(
      array(
        'link' => '#',
        'label' => '会社情報トップ',
      ),
      array(
        'link' => '#',
        'label' => '企業概要',
      ),
      array(
        'link' => '#',
        'label' => '社長挨拶',
      ),
      array(
        'link' => '#',
        'label' => '事業案内',
      ),
      array(
        'link' => '#',
        'label' => 'アクセスマップ',
      ),
    ),
  ),
);
?>

<!-- ▼▼▼ サイドバー ▼▼▼ -->
<aside>
  <p>著者</p>
  <div class="flex">
    <div class="relative w-full">
      <input type="search" class="block p-2.5 w-full z-20 text-sm bg-gray-50 rounded-lg border border-gray-300" placeholder="キーワードを入力" required>
      <button type="button" class="absolute top-0 bottom-0 right-0 px-3 py-2.5 text-sm text-white bg-blue-700 rounded-r-lg hover:bg-blue-800">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>

  <?php foreach ($ASIDE_ITEMS as $ITEM) : ?>
    <div class="mt-4">
      <h4><?php echo $ITEM['heading']; ?></h4>
      <div class="mt-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-400">
        <?php foreach ($ITEM['links'] as $index => $LINK) : ?>
          <?php if ($index == 0): ?>
            <a href="<?php echo $LINK['href']; ?>" class="block py-2 px-4 w-full cursor-pointer hover:text-blue-700"><?php echo $LINK['label']; ?></a>
          <?php else: ?>
            <a href="<?php echo $LINK['href']; ?>" class="block py-2 px-4 w-full border-t border-gray-400 cursor-pointer hover:text-blue-700"><?php echo $LINK['label']; ?></a>
          <?php endif ?>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</aside>
<!-- ▲▲▲ サイドバー ▲▲▲ -->