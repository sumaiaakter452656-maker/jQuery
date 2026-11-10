<?php /* <head> shared by every layout. Uses $pageTitle */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle ?? SITE_NAME) ?> | <?= SITE_NAME ?></title>
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
