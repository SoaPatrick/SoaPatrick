<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<header class="relative">
  <?php if (!empty(param('tag'))): ?>
    <h1><?= html(urldecode(param('tag'))) ?></h1>
    <?php $articles = $page->children()->filterBy('tags', urldecode(param('tag')), ',')->paginate(10); ?>
  <?php else: ?>
    <div class="marginal-icon marginal-icon--large mb-2 sm:mb-0 sm:absolute grid place-items-center">
        <?= $page->icon(); ?>
    </div>    
    <h1><?= $page->title() ?></h1>
    <?php $articles = $page->children()->listed()->flip()->paginate(10) ?>
    <p class="text-lg"><?= $page->description() ?></p>
  <?php endif ?>
  <div>
</header>
<div>
  <?php foreach($articles as $article): ?>
    <?php snippet('list-item--article', ['article' => $article]) ?>
  <?php endforeach ?>
</div>

<?php if ($articles->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if ($articles->pagination()->hasNextPage()): ?>
  <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">
    ← older
  </a>
  <?php endif ?>

  <?php if ($articles->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">
    newer →
  </a>
  <?php endif ?>

</nav>
<?php endif ?>

<?php snippet('footer') ?>
