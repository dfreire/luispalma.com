<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <div class="carousel">
        <?php foreach ($page->images() as $image): ?>
            <div><?php echo thumb($image, array('width' => "600")) ?></div>
        <?php endforeach ?>
    </div>
</div>

<?php snippet('footer') ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').slick({
            autoplay: true,
            arrows: false,
            dots: false,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>

<?php snippet('outro') ?>
