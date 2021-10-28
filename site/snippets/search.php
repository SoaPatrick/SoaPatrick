<div class="search-panel" id="search-collapse">
  <form action="<?= page('search')->url() ?>" method="get" class="px-8 py-16">
    <label for="search-collapse__input">
      <input type="text" name="q" id="search-collapse__input" value="<?php echo get('s'); ?>" placeholder="Find Stuff..." aria-label="Find Stuff..." tabindex="-1" class="w-full shadow-none border-none rounded-full text-2xl px-6 py-3 font-normal text-black bg-black-10 focus:outline-none placeholder-black placeholder-opacity-50">
    </label>
  </form>
</div>