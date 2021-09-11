<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<style type="text/css">
    div.ccm-page header nav {
        text-align:center;
    }
    div.ccm-page header nav ul {
        float: none;
    }
    a.nav-selected.nav-path-selected {
        color: gray !important;
        border: 1px solid gray;
        padding: 3px 5px;
        margin-right: 35px;
    }
    @media only screen and (max-width: 767px) {
        a.nav-selected.nav-path-selected {
            margin-left: 8px;
        }
    }
    .img-center picture img {
        margin: 0 auto;
    }
    main {
        padding-top: 30px;
    }
    .ccm-responsive-overlay {
        top: 225px;
    }
    .ccm-responsive-overlay ul li a {
        color: black;
        width: auto;
    }
    .ccm-responsive-menu-launch i:after {
        color: black;
    }
    .ccm-responsive-menu-launch.responsive-button-close i:after {
        z-index: 9999;
        color: black;
    }
</style>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
        </div>
    </div>
</header>
