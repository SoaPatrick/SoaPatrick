<?php

/** @var \Kirby\Cms\Block $block */
$alt      = $block->alt();
$caption  = $block->caption();
$crop     = $block->crop()->isTrue();
$link     = $block->link();
$ratio    = $block->ratio()->or('auto');
$src      = null;
$lightbox = $block->lightbox()->isTrue();
$align    = $block->align();
$id       = $block->id();

if ($block->location() == 'web') {
    $src = $block->src()->esc();
    $dimensions = '';
} elseif ($image = $block->image()->toFile()) {
    if ($alt->isEmpty()) {
      $alt = $image->alt();
    }
    if ($alt->isEmpty()) {
      $alt = "empty alt text";
    }
    if ($caption->isEmpty()) {
      $caption = $image->caption();
    }
    $src = $image->url();
    $dimensions = 'width="'.$image->width().'" height="'.$image->height().'"';
}

?>
<?php if ($src): ?>
<figure class="image-block align-<?= $align ?>" <?= attr(['data-ratio' => $ratio, 'data-crop' => $crop], ' ') ?>>
  <?php if ($link->isNotEmpty()): ?>
    <a href="<?= esc($link->toUrl()) ?>" aria-label="<?= $alt ?>" class="img-link img-link--external" target="_blank">
      <img src="<?= $src ?>" alt="<?= $alt ?>" loading="lazy">
    </a>
  <?php elseif($lightbox): ?>
  <a href="<?= $src ?>" data-fslightbox="<?= $id ?>" aria-label="lightbox" class="img-link img-link--lightbox">
    <img 
      srcset="<?= $image->srcset('img-' .$align ); ?>"
      type="image/webp" 
      alt="<?= $alt ?>" 
      <?= $dimensions ?>
      loading="lazy">
  </a>
  <?php else: ?>
    <img 
      srcset="<?= $image->srcset('img-' . $align ); ?>"
      type="image/webp" 
      alt="<?= $alt ?>" 
      <?= $dimensions ?>
      loading="lazy">
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption->kt() ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>