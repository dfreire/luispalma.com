<?php snippet('header') ?>

    <div class="text-page">
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
        <?php echo $page->text()->kirbytext() ?>
    </div>


<?php snippet('footer') ?>
