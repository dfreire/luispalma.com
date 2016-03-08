<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <?php if($page->isTitleVisible() == '1'): ?>
        <h2 class="title"><?php echo $page->title()->html() ?></h2>
    <?php endif ?>
    <div class="gallery">
        <div class="grid">
            <?php foreach ($page->images() as $image): ?>
                <a class="image-link grid-item" href="<?php echo $image->url() ?>"><?php echo thumb($image, array('width' => 150)) ?></a>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/4.0.0/masonry.pkgd.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('.grid').masonry({
          // options
          itemSelector: '.grid-item',
          columnWidth: 175
        });

    	$('.gallery').magnificPopup({
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
    });
</script>
<?php snippet('outro') ?>
