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
    <link rel="stylesheet" href="<?=$css?>" type="text/css">
    <!-- Custom -->
    <link rel="stylesheet" href="./application/views/public/custom/dist/css/custom.css" type="text/css">

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">로고 </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">메뉴1 </a></li>
            <li><a href="#">메뉴2</a></li>
            <li><a href="#">메뉴3</a></li>
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

    </div><!-- /.navbar-collapse -->
</nav>
</body>
</html>