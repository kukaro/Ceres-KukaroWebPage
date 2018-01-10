<?php

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
    <?include 'nav_main.php'?>
    <article>
        <div class="page-header">
            <h1> Ceres - IT Web page</h1>
        </div>
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, ceres!</h1>
                <p>IT Web Page 입니다. </p>
                <p><a class="btn btn-primary btn-lg">사이트 소개 보기</a></p>
            </div>
        </div>
    </article>
</div>

<script src="<?= $js['jquery'] ?>"></script>
<script src="<?= $js['bootstrap'] ?>"></script>
<script src="<?= $js['custom'] ?>"></script>
</body>
</html>