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
    <?$APPLICATION->ShowPanel();?>
    <?
        $APPLICATION->SetAdditionalCSS('/design/css/normalize.css');
        $APPLICATION->SetAdditionalCSS('/design/css/style.css');
        $APPLICATION->SetAdditionalCSS('/design/css/idangerous.swiper.css');
        $APPLICATION->SetAdditionalCSS('/design/css/jquery.formstyler.css');
        $APPLICATION->SetAdditionalCSS('/design/css/jquery.fancybox.css');

    ?>

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


    <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
	"MENU_THEME" => "site",
	"MENU_CACHE_TYPE" => "A",	// Тип кеширования
	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	"MAX_LEVEL" => "2",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "second",	// Тип меню для остальных уровней
	"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
    <div id="main" role="main">
		