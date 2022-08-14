<?php
$NAV_ITEMS = array(
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

$SNS_ITEMS = array(
  array(
    'href' => '#',
    'icon' => 'fab fa-facebook-f',
  ),
  array(
    'href' => '#',
    'icon' => 'fab fa-instagram',
  ),
  array(
    'href' => '#',
    'icon' => 'fab fa-twitter',
  ),
);
// TODO: フッターリンクのカスタムメニュー参照
// $ITEMS = GET_MENU_ITEMS('footer_links');
// var_dump($ITEMS);
?>

<!-- ▼▼▼ フッター ▼▼▼ -->
<footer class="bg-gray-900 px-2 py-8 text-white">
  <div class="container mx-auto">
    <div class="flex justify-between">
      <div class="">
        <a href="/">LOGO</a>
      </div>
      <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
        <?php foreach ($NAV_ITEMS as $ITEM) : ?>
          <div>
            <h2 class="mb-6 text-sm font-semibold"><?php echo $ITEM['heading']; ?></h2>
            <ul class="text-gray-400">
              <?php foreach ($ITEM['links'] as $LINK) : ?>
                <li class="mb-4">
                  <a href="<?php echo $LINK['href']; ?>" class="hover:underline"><?php echo $LINK['label']; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <p class="text-sm text-gray-500 sm:text-center">Copyright &copy; XXXXX 2022. All Rights Reserved.</p>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
        <?php foreach ($SNS_ITEMS as $ITEM) : ?>
          <a href="<?php echo $ITEM['href']; ?>" class="text-gray-500 hover:text-white">
            <i class="<?php echo $ITEM['icon']; ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>
<!-- ▲▲▲ フッター ▲▲▲ -->
