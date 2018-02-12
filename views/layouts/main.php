<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="./favicon.ico" type="image/png">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="simplepagination/simplePagination.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/docs/assets/owlcarousel/owl.carousel.min.js"></script>
        <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/docs/assets/owlcarousel/assets/owl.carousel.min.css"/>
        <style>
            nav.navbar {
                background-color: transparent;
            }
            .navbar-right {
                margin-right: 74px;
            }
            ul.timer-row > li > ul {
                list-style: none;
            }
            div.round-container {
                border: dashed 2px darkred;
                border-radius: 50px;
                height: 50px;
                width: 50px;
                text-align: center;
                vertical-align: middle;
                display: table-cell;
            }
        </style>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>


            <?= $content ?>



    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key= AIzaSyD13uUpSHpxehbmJilkWeHp5YxhTT3BuZ4 "></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://github.com/esimakin/twbs-pagination.git"></script>
    <script type="text/javascript" src="googlemaps.js"></script>
    <script type="text/javascript" src="libs/markerclusterer.js"></script>
    <script type="text/javascript" src="simplepagination/jquery.simplePagination.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/maxscript.js"></script>
    <script type="text/javascript" src="js/ajax.events.js"></script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>