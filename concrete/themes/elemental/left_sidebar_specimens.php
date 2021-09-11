<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php');
?>

<style type="text/css">
    .page-title {
        font-size: 28px;
        margin: 15px;
    }
    main {
        padding-top: 30px;
    }
    .active {
        color: gray !important;
        font-weight: bold;
        padding: 3px 5px;
        margin-left: -5px;
    }
    .ccm-custom-style-container.ccm-custom-style-headernavigation-1676 a.nav-path-selected {
        color: gray !important;
        border: 1px solid gray;
        padding: 3px 5px;
        margin-right: 35px;
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
    div.ccm-page main a:not(.fa):not(.btn), div.ccm-page footer a:not(.fa):not(.btn) {
        color: black;
    }
    .bug-title, div.ccm-page main .specimens-sidebar a:not(.fa):not(.btn), div.ccm-page main .bug-title a:not(.fa):not(.btn) {
        color: black;
    }
    div.ccm-page main a:not(.fa):not(.btn) {
        color: #20bde8;
    }
    .bug-container {
        display: inline-block;
        width: 100px;
        text-align: center;
    }
    .bug-title {
        font-size: 18px !important;
    }
    .specimens-dropdown {
        text-align: center;
        margin-bottom: 20px;
        font-size: 18px;
    }
    @media only screen and (max-width: 767px) {
        .specimens-sidebar {
            display: none;
        }
    }
    @media only screen and (min-width: 768px) {
        .specimens-dropdown {
            display: none;
        }
    }

</style>

<main>
    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>

    <div class="container">
        <!-- mobile only dropdown menu -->
        <div class="row">
            <div class="specimens-dropdown">
                <select id="specimens_dropdown" onchange="handleSelect(this)">
                    <option value="/index.php/museum">Specimens Home</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-sidebar specimens-sidebar">
                <?php
                $a = new GlobalArea('Custom Sidebar');
                $a->display($c);
                ?>
            </div>
            <div class="col-sm-8 col-sm-offset-1 col-content">
                <?php
                $a = new Area('Main');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</main>

<script type="text/javascript">

    function handleSelect(e) {
        window.location = e.value;
    }

    window.onload = function() {

        // highlight active sidebar menu item
        var url = window.location.href;
        var parts = url.split("/");
        if (parts.length > 6) {
            url = parts[0]+"/"+parts[1]+"/"+parts[2]+"/"+parts[3]+"/"+parts[4]+"/"+parts[5];
        }
        $(".specimens-sidebar").find("a").each(function(){
            if ($(this).attr('href') == url) {
                $(this).addClass('active');
            }
            $('#specimens_dropdown').append($('<option>', {
                value: $(this).attr('href'),
                text: $(this).html().replace("&amp;","&").replace("&nbsp;"," "),
                selected: $(this).attr('href') == url
            }));
        });

        // move imgs into div containers; add classes to p/span tags;
        var i = 0;
        $(".col-sm-8.col-sm-offset-1.col-content").find("p").each(function(){
            if ($(this).find('img').length > 0 && $(this).find('a').length > 0) {
                jQuery('<div/>', {
                    "id" : "container_"+i,
                    "class" : 'bug-container'
                }).prependTo($(this));
                $(this).find('img').each(function(){
                    jQuery($(this)).detach().appendTo("#container_"+i);
                });
                $(this).find('p').each(function(){
                    $(this).addClass('bug-title');
                });
                $(this).find('span').each(function(){
                    $(this).addClass('bug-title');
                });
            }
            i++;
        });
    }
</script>

<?php
$this->inc('elements/footer.php');

