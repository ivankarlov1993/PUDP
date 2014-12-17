<?define('SHOW_OFFERS', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги и цены");
$APPLICATION->SetPageProperty('title', "Услуги и цены");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_RECURSIVE" => "Y",
        "PATH" => "/include/services.php"
    )
);?>
    </div>
    </div>
    </div>
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_RECURSIVE" => "Y",
        "PATH" => "/include/actions.php"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    ".default",
    Array(
        "IBLOCK_TYPE" => "3",
        "IBLOCK_ID" => "4",
        "SECTION_ID" => "",
        "SECTION_CODE" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_FIELD2" => "",
        "ELEMENT_SORT_ORDER2" => "",
        "FILTER_NAME" => "arrFilter",
        "INCLUDE_SUBSECTIONS" => "Y",
        "SHOW_ALL_WO_SECTION" => "Y",
        "PAGE_ELEMENT_COUNT" => "100",
        "LINE_ELEMENT_COUNT" => "3",
        "PROPERTY_CODE" => array("PRICE", ""),
        "OFFERS_LIMIT" => "5",
        "TEMPLATE_THEME" => "",
        "MESS_BTN_BUY" => "",
        "MESS_BTN_ADD_TO_BASKET" => "",
        "MESS_BTN_SUBSCRIBE" => "",
        "MESS_BTN_DETAIL" => "",
        "MESS_NOT_AVAILABLE" => "",
        "SECTION_URL" => "",
        "DETAIL_URL" => "",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "N",
        "SET_META_KEYWORDS" => "N",
        "META_KEYWORDS" => "",
        "SET_META_DESCRIPTION" => "N",
        "META_DESCRIPTION" => "",
        "BROWSER_TITLE" => "-",
        "ADD_SECTIONS_CHAIN" => "N",
        "DISPLAY_COMPARE" => "N",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "CACHE_FILTER" => "N",
        "PRICE_CODE" => array(),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "N",
        "BASKET_URL" => "",
        "ACTION_VARIABLE" => "",
        "PRODUCT_ID_VARIABLE" => "",
        "USE_PRODUCT_QUANTITY" => "N",
        "ADD_PROPERTIES_TO_BASKET" => "N",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "PRODUCT_PROPERTIES" => array(),
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Товары",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "ADD_PICT_PROP" => "-",
        "LABEL_PROP" => "-"
    )
);?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>