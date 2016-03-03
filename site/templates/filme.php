<?php snippet('header') ?>

<?php echo youtube($page->youtubeLink()->kirbytext(), "100%", "100%") ?>

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

<?php snippet('footer') ?>
