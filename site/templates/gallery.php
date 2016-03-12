<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="gallery page">
    <?php if($page->isTitleVisible() == '1'): ?>
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
    <?php endif ?>
    <div class="gallery-container">
        <?php foreach ($page->images() as $image): ?>
            <a class="gallery-item" href="<?php echo $image->url() ?>"><?php echo thumb($image, array('width' => 170)) ?></a>
        <?php endforeach ?>
    </div>
    <div id="height-hack"></div>
</div>

<?php snippet('footer') ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/4.0.0/masonry.pkgd.min.js"></script>
<script type="text/javascript">
    function initGallery() {
        $('.gallery-container').masonry({
            itemSelector: '.gallery-item'
        });
    }

    function initLightbox() {
        $('.gallery-container').magnificPopup({
    		delegate: 'a',
    		type: 'image',
    		gallery: {
    			enabled: true,
    			preload: [0, 1],
                tCounter: '%curr% / %total%'
    		},
    		image: {
                cursor: null
            }
    	});
    }

    $(document).ready(function() {
        setTimeout(initGallery, 0);
        setTimeout(initLightbox, 0);
    });
</script>

<?php snippet('outro') ?>
