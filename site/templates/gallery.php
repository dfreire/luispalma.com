<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <?php if($page->isTitleVisible() == '1'): ?>
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
    <?php endif ?>
    <?php foreach ($page->images() as $image): ?>
    	<a class="image-link" href="<?php echo $image->url() ?>"><?php echo thumb($image, array('width' => 200)) ?></a>
    <?php endforeach ?>
</div>

<?php snippet('footer') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.image-link').magnificPopup({ type: 'image' });
    });
</script>
<?php snippet('outro') ?>
