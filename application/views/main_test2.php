<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Ceres!</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= $css['bootstrap'] ?>" type="text/css">
    <!-- Custom -->
    <link rel="stylesheet" href="<?= $css['custom'] ?>" type="text/css">
</head>
<body>
<div class="container">
    <? include 'nav.php' ?>
    <? include 'home.php' ?>
</div>

<script src="<?= $js['jquery'] ?>"></script>
<script src="<?= $js['bootstrap'] ?>"></script>
<script src="<?= $js['custom'] ?>"></script>
</body>
</html>