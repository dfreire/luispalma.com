<?php snippet('intro') ?>
<?php snippet('header') ?>

<div class="page">
    <?php echo youtube($page->youtubeLink()->kirbytext(), "100%") ?>
</div>

<?php snippet('footer') ?>

<script type="text/javascript">
    function updateHeight() {
        var iframe = $("iframe");
        var refWidth = 854;
        var refHeight = 480;
        var width = iframe.width();
        var height = width * refHeight / refWidth
        iframe.height(height);
    }

    $(updateHeight);
    $(window).on("resize", updateHeight);
</script>

<?php snippet('outro') ?>
