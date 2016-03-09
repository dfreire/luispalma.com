<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <div>
        <?php foreach ($page->images() as $image): ?>
            <?php echo thumb($image, array('width' => "700")) ?>
        <?php endforeach ?>
    </div>
</div>

<?php snippet('footer') ?>
<?php snippet('outro') ?>
