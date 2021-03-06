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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/CI/main"><img src="<?= $image['custom-ceres'] ?>"
                                                             style="width: auto; max-height: 100%;"> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown" onmouseover="mouse_over(0)" onmouseleave="mouse_leave(0)"><a
                                class="dropdown-toggle" data-toggle="dropdown" href="#">사이트 소개<b class="caret"></b></a>
                        <ul class="dropdown-menu inverse-dropdown">
                            <li><a href="#">서브메뉴 1</a></li>
                            <li><a href="#">서브메뉴 2</a></li>
                            <li><a href="#">서브메뉴 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" onmouseover="mouse_over(1)" onmouseleave="mouse_leave(1)"><a
                                class="dropdown-toggle" data-toggle="dropdown" href="#">파일 관리<b class="caret"></b></a>
                    </li>
                    <li class="dropdown" onmouseover="mouse_over(2)" onmouseleave="mouse_leave(2)"><a
                                class="dropdown-toggle" data-toggle="dropdown" href="#">코드 관리<b class="caret"></b></a>
                    </li>
                    <!-- <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">드롭다운 <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">서브메뉴 1</a></li>
                         <li><a href="#">서브메뉴 2</a></li>
                         <li><a href="#">서브메뉴 3</a></li>
                       </ul>
                     </li> -->
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="검색">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </nav>
</div>
<script src="<?= $js['jquery'] ?>"></script>
<script src="<?= $js['bootstrap'] ?>"></script>
<script src="<?= $js['custom'] ?>"></script>
<?=$navList[0]['external_name'] ?>
</body>
</html>