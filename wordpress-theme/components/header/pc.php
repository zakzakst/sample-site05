<?php
$NAV_ITEMS = array(
  array(
    'id' => 'about',
    'href' => home_url('/sample-page'),
    'label' => '○○○○について',
  ),
  array(
    'id' => 'menu',
    'href' => '/menu.html',
    'label' => 'メニュー',
  ),
  array(
    'id' => 'cafe',
    'href' => '/cafe.html',
    'label' => '店内設備',
  ),
  array(
    'id' => 'news',
    'href' => '/news/',
    'label' => 'お知らせ',
  ),
  array(
    'id' => 'recruit',
    'href' => '/recruit.html',
    'label' => '採用情報',
  ),
);
?>

<!-- ▼▼▼ ヘッダー（PC） ▼▼▼ -->
<nav class="bg-gray-900 px-2 py-2.5 text-white">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <h1><a href="<?php echo esc_url(home_url()); ?>">LOGO</a></h1>
    <button type="button" class="lg:hidden px-3 py-2.5 text-sm text-white bg-blue-700 rounded-lg hover:bg-blue-800">
      <i class="fas fa-bars"></i>
    </button>
    <div class="hidden lg:flex">
      <ul class="flex flex-row mr-4">
        <?php foreach ($NAV_ITEMS as $ITEM) : ?>
          <li>
            <a href="<?php echo $ITEM['href']; ?>" class="block px-4 py-2"><?php echo $ITEM['label']; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="flex">
        <div class="relative w-48">
          <input type="search" class="block p-2.5 w-full z-20 text-sm bg-gray-50 rounded-lg border border-gray-300" placeholder="キーワードを入力" required>
          <button type="button" class="absolute top-0 bottom-0 right-0 px-3 py-2.5 text-sm text-white bg-blue-700 rounded-r-lg hover:bg-blue-800">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- ▲▲▲ ヘッダー（PC） ▲▲▲ -->