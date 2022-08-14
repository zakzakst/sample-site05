<form class="relative w-48" method="GET" action="/wordpress/">
  <input
    type="text"
    name="s"
    value="<?php echo get_search_query(); ?>"
    class="block p-2.5 w-full z-20 text-black text-sm bg-gray-50 rounded-lg border border-gray-300"
    placeholder="キーワードを入力"
    required
  >
  <button
    type="submit"
    class="absolute top-0 bottom-0 right-0 px-3 py-2.5 text-sm text-white bg-blue-700 rounded-r-lg hover:bg-blue-800"
  >
    <i class="fas fa-search"></i>
  </button>
</form>