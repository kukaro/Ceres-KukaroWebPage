<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
                <? for ($i = 0; $i < count($navList); $i++): ?>
                    <li class="dropdown" onmouseover="mouse_over(<?= $i ?>)"
                        onmouseleave="mouse_leave(<?= $i ?>)">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                           href="#"><?= $navList[$i]['internal_name'] ?>
                            <b class="caret"></b>
                        </a>
                        <? if (count($navSubList[$navList[$i]['external_name']]) != 0): ?>
                            <ul class="dropdown-menu inverse-dropdown">
                                <? foreach ($navSubList[$navList[$i]['external_name']] as $value): ?>
                                    <li class="dropdown-submenu"><a class="dropdown-submenu-toggle"
                                                                    href="/CI/
                                                                    <?= $navList[$i]['owner'] ?>
                                                                    /<?= str_replace(' ', '-', $navList[$i]['external_name']) ?>
                                                                    /<?= $value['internal_name'] ?>"><?= $value['internal_name'] ?></a>
                                        <ul class="dropdown-menu inverse-dropdown">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </li>
                <? endfor; ?>
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