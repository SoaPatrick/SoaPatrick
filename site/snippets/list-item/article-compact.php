<article>
  <header class="mb-2">
    <?php snippet('published', ['article' => $article]); ?>
    <?php snippet('edit-page', ['page' => $article]); ?>
    <h2 class="mt-0 mb-1">
      <a class="decoration-transparent hover:decoration-current" href="<?= $article->url() ?>"><?= $article->title() ?></a>
    </h2>
  </header>
  <?php if ($article->format() == "standard"): ?>
    <div>
      <p class="my-4">
        <?= $article->text()->toBlocks()->excerpt(200) ?> <a href="<?= $article->url() ?>" class="more">more →</a>
      </p>
    </div>
  <?php endif ?>
  <footer class="bg-egg-100 dark:bg-blue-100 inline-block rounded-md py-1 px-2">
    <div class="tag-list">
      <?php foreach ($article->tags()->split() as $tag): ?>
        <a class="hashtag" href="<?= $article->parent()->url(['params' => ['tag' => urlencode($tag)]]) ?>"><?= html($tag) ?></a>
      <?php endforeach ?>
    </div>
  </footer>
</article>