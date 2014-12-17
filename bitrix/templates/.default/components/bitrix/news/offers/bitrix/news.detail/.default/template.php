<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="col price-box border-top-blue" aria-describedby="pb-4">
    <h2 id="pb-4">
        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?=$arResult['NAME']?></a>
    </h2>
    <?=$arResult['PREVIEW_TEXT']?>
    <div class="price-box__price">от <span><?=number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '', ' ')?></span> руб.</div>
    <a class="price-box__more" href="
            <?
                if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
                ?>
                <div class="news-detail-share">
                    <noindex>
                        <?
                        $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                                "HANDLERS" => $arParams["SHARE_HANDLERS"],
                                "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                                "PAGE_TITLE" => $arResult["~NAME"],
                                "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                "HIDE" => $arParams["SHARE_HIDE"],
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );
                        ?>
                    </noindex>
                </div>
                <?
                }
            ?>
    "></a>
</div>