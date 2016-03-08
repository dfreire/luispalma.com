<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <?php if($page->isTitleVisible() == '1'): ?>
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
    <?php endif ?>
    <div class="gallery">
        <?php foreach ($page->images() as $image): ?>
            <a class="image-link" href="<?php echo $image->url() ?>"><?php echo thumb($image, array('width' => 220)) ?></a>
        <?php endforeach ?>
    </div>
</div>

<?php snippet('footer') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).ready(function() {
        	$('.gallery').magnificPopup({
        		delegate: 'a',
        		type: 'image',
        		gallery: {
        			enabled: true,
        			preload: [0,1],
                    tCounter: '%curr% / %total%'
        		},
        		image: {
                    cursor: null
                }
        	});
        });
    });
</script>
<?php snippet('outro') ?>
