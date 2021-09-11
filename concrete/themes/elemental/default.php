<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php');
?>

<style type="text/css">
    .page-title {
        font-size: 28px;
        margin: 15px;
    }
    #products_container {
        text-align: center;
    }
    .product-category {
        display: inline-block;
        position: relative;
        margin: 15px;
        width: 200px;
        text-align: center;
    }
    .product-category img {
        max-height: 200px;
    }
    .category-title {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .category-title a {
        color: white !important;
        text-shadow: 1px 1px 2px black, 0 0 3px darkblue;
        font-weight: bold;
        font-size: 18px;
    }
    .hover a {
        text-shadow: 1px 1px 2px black, 0 0 3px darkblue, 0 0 25px blue;
    }
    @media only screen and (max-width: 767px) {
        .mobile-hide {
            display: none;
        }
    }

</style>

<main>
    <?php
    $a = new Area('Main');
    $a->enableGridContainer();
    $a->display($c);

    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</main>

<script type="text/javascript">
    window.onload = function() {
        $(".product-category").hover(
            function () {
                $(this).addClass('hover');
            }, 
            function () {
                $(this).removeClass('hover');
            }
        );
    }
</script>

<?php
$this->inc('elements/footer.php');
