<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="utf-8" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1024">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <?$APPLICATION->ShowHead();?>

    <link href="css/normalize.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" />
    <link href="css/jquery.formstyler.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,300,300italic,600,600italic,700italic,800,800italic&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href="css/jquery.fancybox.css" rel="stylesheet" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="css/ie8.css" />
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/modernizr.js"></script>
</head>
<body>
<div id="wrapper">

    <header id="header" class="clearfix row" role="banner">
        <div id="logo">
            <a href="/"><img src="images/logo.png" alt="Поликлиника №3 - Управление делами президента РФ" /></a>
        </div>
        <div class="header__contacts">
            <span class="tel"><a href="tel:+74959821010">8 495 982 1010</a></span>
            Многоканальный телефон
        </div>
    </header>

    <nav id="navigation" role="navigation" aria-label="Главное меню">
        <ul role="menubar" class="clearfix">
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon01 "></i> Об отделении</a></li>
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon02"></i> Услуги и цены</a></li>
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon02"></i> Оборудование</a></li>
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon02"></i> Врачи отделения</a></li>
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon02"></i> Расписание</a></li>
            <li role="menuitem" class="border-top-blue"><a href="#"><i class="icon navicon02"></i> Контакты</a></li>
        </ul>
    </nav>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "main",
        array(
            "ROOT_MENU_TYPE" => "top",
            "MENU_THEME" => "site",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "N",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "second",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N"
        ),
        false
    );?>
    <div id="main" role="main">
		