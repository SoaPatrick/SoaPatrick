<article class="my-16">
  <header class=relative>
    <div class="marginal-icon sm:absolute grid place-items-center w-4 h-5 rounded-full bg-primary">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-1/3 h-auto"><path fill="currentColor" d="M404 384h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm-116-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm-128 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm352-188v272c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h80c13.255 0 24 10.745 24 24v185.167l157.267-78.633C301.052 154.641 320 165.993 320 184v57.167l157.267-78.633C493.052 154.641 512 165.993 512 184zM96 280V64H32v384h448V196.944l-180.422 90.211C294.268 289.81 288 285.949 288 280v-83.056l-180.422 90.211C102.269 289.811 96 285.947 96 280z"></path></svg>
    </div>
    <div class="flex">
      <time class="text-xs uppercase tracking-wide opacity-70" datetime="<?= $article->published()->toDate(DATE_ATOM) ?>">
        <?= $article->published()->toDate('F j, Y') ?>
      </time>
    </div>
    <h2 class="mt-0"><a class="dark:text-white text-black" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
  </header>
  <div>
    <?= $article->text()->toBlocks()->first() ?>
  </div>
  <footer>
    <div>
      <?php foreach ($article->tags()->split() as $tag): ?>
        <a class="tag" href="<?= $article->parent()->url(['params' => ['tag' => urlencode($tag)]]) ?>"><?= html($tag) ?></a>
      <?php endforeach ?>
    </div>
  </footer>
</article>