<?php snippet('header') ?>
<header class="relative">
  <?php if (!empty(param('tag'))): ?>
    <h1><?= html(urldecode(param('tag'))) ?></h1>
    <?php $articles = $page->children()->filterBy('tags', urldecode(param('tag')), ',')->flip()->paginate(10); ?>
  <?php else: ?>
    <div class="marginal-icon marginal-icon--large mb-2 sm:mb-0 sm:absolute grid place-items-center">
        <?= $page->icon(); ?>
    </div>
    <h1><?= $page->title() ?></h1>
    <?php $articles = $page->children()->listed()->flip()->paginate(10) ?>
    <p class="text-lg"><?= $page->description() ?></p>
  <?php endif ?>
</header>
<div class="content content--articles">
  <?php foreach($articles as $article): ?>
    <?php snippet('list-item/article', ['article' => $article]) ?>
  <?php endforeach ?>
</div>

<?php snippet('pagination-list', ['articles' => $articles]) ?>
<?php snippet('subnavigation', ['subnav' => 'subnavbox']) ?>
<?php snippet('footer') ?>
