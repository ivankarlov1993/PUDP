<?
global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "corvision:menu.sections",
    "",
    array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/services/",
        "SECTION_PAGE_URL" => "##SECTION_CODE#",
        "DETAIL_PAGE_URL" => "##ELEMENT_CODE",
        "IBLOCK_TYPE" => "3",
        "IBLOCK_ID" => 4,
        "DEPTH_LEVEL" => "1",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000",
        "PICTURE_WIDTH" => 30,
        "PICTURE_HEIGHT" => 30,
    ),
    false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);