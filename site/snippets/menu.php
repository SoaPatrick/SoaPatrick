<header class="fixed left-0 bottom-6 sm:bottom-8 sm:left-8">
  <nav class="inline-flex flex-col items-start">
    <a class="p-3 sm:p-0 sm:py-1 m-1 sm:m-0 sm:mb-2 " aria-label="SoaPatrick" href="/">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 274.66 314.5" class="h-5 sm:h-12 block text-primary hover:text-black dark:hover:text-white transition-all duration-300 ease-in-out">
          <path fill="currentColor" d="M99.39,314.4,175.77,60.64h54.39c15.9,0,27.6,2,34.6,6,6.7,3.8,9.9,10.7,9.9,21,0,8.29-1.9,18.49-5.6,30.39l-14.6,48.59c-3.5,11.4-7.3,21-11.4,28.5a55.09,55.09,0,0,1-14.39,17.5,51.09,51.09,0,0,1-19.8,9.19c-7.7,1.9-17.2,2.8-28.2,2.8h-10.8l-27,89.89h0l-43.49-.1ZM222,132.7c1.37-5.27,4.21-16.67,4.21-19.47,0-3.4-1.1-5.5-3.2-6.4a16.93,16.93,0,0,0-6.2-.9l-11.7.1-20.4,67.89-1.5,5,12.3.1a15.84,15.84,0,0,0,6.9-1.5,14.81,14.81,0,0,0,5.9-5.6c2.89-4.06,5.55-11.69,7.24-17.14C217,150,219.68,141.42,222,132.7Z"></path>
          <path fill="currentColor" d="M86.49,78.09a31.07,31.07,0,0,0,5,17.29,177.31,177.31,0,0,0,10.8,14.1c2.5,3,5.1,6.3,7.8,9.7a76,76,0,0,1,6.9,11.2,74.66,74.66,0,0,1,5.19,13.8,63,63,0,0,1,2.1,16.89,106.54,106.54,0,0,1-1.2,15.2,138.85,138.85,0,0,1-4,17.7,205.56,205.56,0,0,1-12.8,33.49,76,76,0,0,1-15.7,21.3c-5.9,5.3-11.89,8.56-20.6,11.3-14.43,3.76-25.73,3.34-34.89,3s-18.4-2.8-24.4-6.9c-7-4.8-10.5-12.7-10.7-24.3-.1-7.8,1.5-17.59,4.8-29l5.7-19.8H52.3l-3.9,12.8c-1.4,5.4-2.1,9.3-2.1,12.2.1,6.1,3.34,9.46,9.3,9.59,6.14,0,9.33-2.22,12-5.19,2.34-2.7,5.3-8.5,7.6-15.8a55.67,55.67,0,0,0,2.2-14.6c0-7.5-1.8-14.1-5.4-19.4-3.4-5-7.1-10.09-11.2-15.09-2.6-3-5.19-6.3-7.79-9.7a63.23,63.23,0,0,1-6.7-11,65.57,65.57,0,0,1-4.8-13.1,63.82,63.82,0,0,1-1.9-16c0-9.49,1.9-20.59,5.6-33.19a171.38,171.38,0,0,1,11.9-29.7,70.91,70.91,0,0,1,15.49-20A57.13,57.13,0,0,1,93.29,3.6,95.93,95.93,0,0,1,121,0c14.2,0,24.9,2.5,32,7.4,6.9,4.8,10.3,12.8,10.3,24.49,0,7.8-1.8,17.5-5.2,28.9l-6,19.7H110.59l3.8-13.4c1.5-5.3,2.3-9.3,2.3-12.1,0-6.2-3.4-9.7-9.4-9.7a14.65,14.65,0,0,0-11.7,5.4c-2.9,3.4-4.84,8.47-6.39,13.2A44.67,44.67,0,0,0,86.49,78.09Z"></path>
      </svg>
    </a>
    <?php foreach($site->children()->listed() as $child): ?>
      <a class="nav-item<?php e($child->isActive(), ' active') ?>" aria-label="<?= $child->title() ?>" href="<?= $child->url() ?>"><span class="nav-icon sm:hidden"><?= $child->icon() ?></span><span class="hidden sm:inline-block"><?= $child->title() ?></span></a>
    <?php endforeach ?>
    <button aria-label="toggle theme" class="nav-item" id="searchToggle"><span class="hidden sm:inline-block">Search</span><svg class="nav-icon" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="fill-primary" d="M208 80a128 128 0 1 1-90.51 37.49A127.15 127.15 0 0 1 208 80m0-80C93.12 0 0 93.12 0 208s93.12 208 208 208 208-93.12 208-208S322.88 0 208 0z"></path><path fill="currentColor" d="M504.9 476.7L476.6 505a23.9 23.9 0 0 1-33.9 0L343 405.3a24 24 0 0 1-7-17V372l36-36h16.3a24 24 0 0 1 17 7l99.7 99.7a24.11 24.11 0 0 1-.1 34z"></path></svg></button>
    <!-- <button aria-label="toggle theme" class="nav-item" id="switchTheme"><span class="hidden sm:inline-block">Theme</span><svg class="nav-icon" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 137-111 248-248 248V8c137 0 248 111 248 248z"></path><path d="M256 8v496C119 504 8 393 8 256S119 8 256 8z" class="fill-primary"></path></svg></button> -->
  </nav>
</header>