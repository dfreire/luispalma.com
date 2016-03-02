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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

    <div class="container">
        <header>
            <h1 class="title"><?php echo $site->title()->html() ?></h1>
            <?php snippet('menu') ?>
        </header>
    </div>
