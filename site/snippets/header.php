<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link rel="shortcut icon" href="/favicon.ico" />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">

  <?php echo css('assets/css/main.css') ?>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <header>
            <a href="/"><h1 class="title"><?php echo $site->title()->html() ?></h1></a>
            <?php snippet('menu') ?>
        </header>
