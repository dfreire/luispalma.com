<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="editions page">
    <?php if($page->isTitleVisible() == '1'): ?>
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
    <?php endif ?>
    <?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>
<?php snippet('outro') ?>
